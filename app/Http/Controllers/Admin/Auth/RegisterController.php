<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ActivateAccount;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index() {
        return view('admin.auth.register', [
            'title' => 'Admin Register'
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        DB::beginTransaction();
        try {
            if ($request['code'] != 86451) {
                return back()->with('code', 'Incorrect staff code');
            }
            $user = User::create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email'],
                'mobile' => $request['mobile'],
                'gender' => $request['gender'],
                'dob' => $request['dob'],
                'address' => $request['address'],
                'state' => $request['state'],
                'admin_active' => true,
                'activation_token' => bin2hex(random_bytes(35)),
                'country' => $request['country'],
                'zip' => $request['zip'],
                'password' => Hash::make($request['password']),
            ]);
            session(['registered' => 'admin']);
            $user->assignRole('admin');
            Mail::to($request['email'])->send(new ActivateAccount($user->activation_token));
            DB::commit();
            return $request->wantsJson()
                ? new JsonResponse([], 201)
                : redirect('success');
        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', $exception->getMessage());
        }
    }

}

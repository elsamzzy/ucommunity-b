<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class AdminRegisteringController extends Controller
{
    public function __construct()
    {
        $this->middleware(['adminguest', 'guest']);
    }

    public function index() {
        $name = Route::currentRouteName();
        return view('admin.register', [
            'name' => $name
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'id' => ['required', 'max:10'],
            'username' => ['required', 'string', 'max:255', 'unique:admin'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $code = 8461566851;
        if($request['id'] != $code){
            return back()->with('code', 'Staff code is incorrect or does not exist');
        }

        $admin = admin::create([
            'username' => $request['username'],
            'password' => Hash::make($request['password'])
        ]);

        Auth::guard()->login($admin);
        session(['registered' => 'yes' ]);
        return redirect()->route('admin.success');
    }

}

<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('admin.auth.login', [
            'title' => 'Admin Login'
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'max:255']
        ]);

        if (Auth::guard()->attempt([
            'email' => $request['email'],
            'password' => $request['password']
            ])) {
            $user = Auth::guard()->user();
            if (! $user->hasRole('admin')) {
                return back()->with('error', 'Unauthorized Access');
            }
            $user->last_login = now();
            $user->save();
            return redirect()->route('admin.dashboard.index');
        }else {
            return back()->with('error', 'Incorrect Credentials');
        }
    }

    public function logout(Request $request) {
        Auth::guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}

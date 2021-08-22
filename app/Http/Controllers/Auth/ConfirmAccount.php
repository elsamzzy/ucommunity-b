<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ConfirmAccount extends Controller
{
    public function __construct()
    {
        $this->middleware('confirm.success')->except('store');
    }

    public function index(Request $request) {
        $type = session('confirm');
        $request->session()->forget('confirm');
        return view('auth.confirmsuccess', [ 'user' => $type, 'title' => 'Successfully Confirmed']);
    }

    public function store($token) {
        if ($user = User::where('activation_token', $token)->first()) {
            $user->active = true;
            $user->activation_token = NULL;
            $user->email_verified_at = now();
            $user->save();
            if ($user->hasRole('admin')) {
                session(['confirm' => 'admin']);
            } else {
                session(['confirm' => 'user']);
            }
            return redirect()->route('confirm.success');
        } else {
            return abort(404);
        }
    }
}

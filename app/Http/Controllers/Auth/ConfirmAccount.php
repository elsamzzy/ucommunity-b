<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ConfirmAccount extends Controller
{
    public function __construct()
    {
        $this->middleware('')->except('store');
    }

    public function index() {
        return view('auth.confirmsuccess');
    }

    public function store($token) {
        if (! $user = User::where('activation_token', $token)->first()) {
            $user->active = true;
            $user->activation_token = NULL;
            $user->email_verified_at = now();
            $user->save();
            session(['confirm' => 'yes']);
            return route('confirm.success');
        } else {
            return abort(404);
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ActivateAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ResendVerificationEmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('auth.resendemail', [
            'title' => 'Resend Email'
        ]);
    }

    public function store() {
        try {
            $user = auth()->guard()->user();
            Mail::to($user->email)->send(new ActivateAccount($user->activation_token));
            if ($user->hasRole('admin')) {
                session(['registered' => 'admin']);
                auth()->guard()->logout();
                return redirect()->route('success');
            } else {
                session(['registered' => 'user']);
                auth()->guard()->logout();
                return redirect()->route('success');
            }
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function relogin() {
        $user = Auth::guard()->user();
        if ($user->hasRole('admin')) {
            Auth::guard()->logout();
            return redirect()->route('admin.login');
        } else {
            Auth::guard()->logout();
            return redirect()->route('login');
        }
    }
}

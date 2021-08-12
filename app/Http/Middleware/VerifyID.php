<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyID
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::guard()->user();
        if ($user->admin_active) {
            return $next($request);
        } else if($user->identity_type !== NULL) {
            return redirect()->route('verify.success');
        } else {
            return redirect()->route('verify.id');
        }
    }
}

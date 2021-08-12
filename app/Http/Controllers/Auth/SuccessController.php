<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function index(Request $request) {
        $type = session('registered');
        $request->session()->forget('registered');
        return view('auth.success', [ 'title' => 'success' , 'user' => $type]);
    }
}

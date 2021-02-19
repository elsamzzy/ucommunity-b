<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SuccessController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'guest',
            'success'
        ]);
    }

    public function index(Request $request){
        $request->session()->forget('success');
        $name = Route::CurrentRouteName();
        return view('auth.success', [
           'name' => $name
        ]);
    }
}

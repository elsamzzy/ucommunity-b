<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AdminLoggingController extends Controller
{

    public function __construct()
    {
        $this->middleware(['adminguest', 'guest']);
    }

    public function index(){
        $name = Route::currentRouteName();
        return view('admin.login',[
            'name' => $name
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'username' => ['required','max:255'],
            'password' => ['required']
        ]);


        if (Auth::guard('admin')->attempt($request->only('username','password'), $request->filled('remember'))) {
            //$details = Auth::guard('admin')->user();
            return redirect()->route('dashboard');
        } else {
            return back()->with('status', 'Incorrect Login details');
        }
    }

}

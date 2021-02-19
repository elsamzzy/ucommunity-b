<?php

namespace App\Http\Controllers\Admin\Dash;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminauth');
    }

    public function index(admin $admin){
        return view('admin.dash.settings',[
            'admin' => $admin
        ]);
    }

    public function store(Request $request, admin $admin) {
        $this->validate($request,  [
            'old-password' => ['required'],
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        $hashedPassword = admin::find($admin->user()->id)->password;
        if (Hash::check($request['old-password'], $hashedPassword)) {
            admin::where('id', $admin->user()->id)->update(['password'=> Hash::make($request['password'])]);
            return back()->with('pass', 'Successfully changed your password');
        }

        return back()->with('pass_error', 'Incorrect password');

    }
}

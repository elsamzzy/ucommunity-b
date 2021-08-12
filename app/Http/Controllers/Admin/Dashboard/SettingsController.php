<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index() {
        return view('admin.dashboard.settings');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'old_password' => ['required', 'max:255'],
            'password' => ['required', 'max:255', 'confirmed']
        ]);
        $hashedPassword = User::find(auth()->user()->id)->password;
        if (Hash::check($request['old_password'], $hashedPassword)) {
            User::where('id', auth()->user()->id)->update(['password'=> Hash::make($request['password'])]);
            return back()->with('message', 'Successfully changed your password');
        }

        return back()->with('error','Incorrect password');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store() {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}

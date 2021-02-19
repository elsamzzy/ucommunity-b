<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AdminRegisterSuccessController extends Controller
{
    public function __construct()
    {
        $this->middleware(['adminregister']);
    }

    public function index() {
        $name = Route::currentRouteName();
        session()->forget('registered');
        return view('admin.success', [
            'name' => $name
        ]);
    }
}

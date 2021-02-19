<?php

namespace App\Http\Controllers\Admin\Dash;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminauth');
    }

    public function index(admin $admin, User $user){
        $list = $user->get();
        $name = Route::currentRouteName();
        return view('admin.dash.index', [
            'admin' => $admin,
            'name' => $name,
            'list' => $list
        ]);
    }
}

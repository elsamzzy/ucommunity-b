<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $users = User::role('user')->latest()->get();
        return view('admin.dashboard.index', [
            'users' => $users,
            'x' => 0
        ]);
    }
}

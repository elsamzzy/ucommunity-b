<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TransCodeSuccessController extends Controller
{
    public function __construct()
    {
        $this->middleware('transcodesuccess');
    }

    public function index(User $user) {
        return view('dash.transcodesuccess', [
            'user' => $user
        ]);
    }
}

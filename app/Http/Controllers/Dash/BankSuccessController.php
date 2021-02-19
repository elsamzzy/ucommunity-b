<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BankSuccessController extends Controller
{
    public function __construct()
    {
        $this->middleware('banksuccess');
    }

    public function index(User $user) {
        return view('dash.banksuccess', [
            'user' => $user
        ]);
    }
}

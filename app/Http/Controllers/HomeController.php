<?php

namespace App\Http\Controllers;

use App\Models\transactions;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user, transactions $transactions)
    {
        $num = rand(0000,10000);
        return view('home', [
            'user' => $user,
            'online' => $num,
            'transactions' => $transactions
        ]);
    }
}

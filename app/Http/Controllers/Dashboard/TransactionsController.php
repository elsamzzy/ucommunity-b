<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionsController extends Controller
{
    private $transactions;

    public function __construct(Transactions $transactions)
    {
        $this->transactions = $transactions;
    }

    public function index() {
        $Transactions = $this->transactions->where('users_id', Auth::guard()->user()->id)->get();
        return view('dashboard.transactions', [
            'transactions' => $Transactions,
            'user' => Auth::guard()->user()
        ]);
    }
}

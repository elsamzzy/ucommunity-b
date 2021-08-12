<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    private $transactions;
    private $user;

    public function __construct(Transactions $transactions, User $user)
    {
        $this->transactions = $transactions;
        $this->user = $user;
    }

    public function index() {
        $transactions = Transactions::where('users_id', auth()->user()->id)->take(5)->orderBy('created_at')->get();
        return view('dashboard.index', [
            'transactions' => $transactions,
            'user' => auth()->guard()->user(),
            'date' => date('Y-M-D'),
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'amount' => ['required', 'string']
        ]);
        $user = Auth::guard()->user();
        Transactions::create([
            'amount' => $request['amount'],
            'users_id' => $user->id,
            'incoming' => 'P'
        ]);
        $user->balance = $user->balance + $request['balance'];
        $user->save();
    }
}

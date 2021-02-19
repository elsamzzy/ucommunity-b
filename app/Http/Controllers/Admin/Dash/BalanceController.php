<?php

namespace App\Http\Controllers\Admin\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function store(Request $request, User $user) {
        $balance = trim($request['balance'], '$');
        $this->validate($request, [
           'balance' => ['required', 'string']
        ]);
        User::where('email', $user->email)->update([
            'balance' => $balance
        ]);

        return back();
    }
}

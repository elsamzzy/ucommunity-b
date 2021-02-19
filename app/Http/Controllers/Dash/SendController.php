<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\transactions;
use App\Models\User;
use Illuminate\Http\Request;

class SendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user) {
        return view('dash.send', [
            'user' => $user
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
           'destination_bank_name' => ['max:255', 'string', 'required'],
           'destination_bank_branch' => ['max:255', 'string', 'required'],
           'destination_bank_city' => ['max:255', 'string', 'required'],
           'destination_bank_iban_swift_code' => ['max:255', 'required', 'min:5'],
           'destination_account_name_holder' => ['max:255', 'string', 'required'],
           'destination_account_number' => ['max:255', 'required'],
           'amount' => ['max:255', 'required', 'min:3'],
        ]);

        transactions::create([
            'users_id' => auth()->user()->id,
            'destination_bank' => $request['destination_bank_name'],
            'swift_code' => $request['destination_bank_iban_swift_code'],
            'destination_name' => $request['destination_account_name_holder'],
            'destination_branch' => $request['destination_bank_branch'],
            'destination_bank_city' => $request['destination_bank_city'],
            'amount' => $request['amount'],
            'destination_number' => $request['destination_account_number'],
        ]);
        $details= array();
        array_push($details, $request['destination_bank_name']);
        array_push($details, $request['destination_bank_iban_swift_code']);
        array_push($details, $request['destination_account_name_holder']);
        array_push($details, $request['destination_bank_branch']);
        array_push($details, $request['destination_bank_city']);
        array_push($details, $request['amount']);
        array_push($details, $request['destination_account_number']);
        session(['trans_details' => $details]);
        return redirect()->route('bank');

    }
}

<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function __construct()
    {
        $this->middleware('send');
    }

    public function index(User $user) {
        return view('dash.bank',[
            'user' => $user
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => ['max:8','min:5','required']
        ]);
        $code = $request['code'];
        if($code === '945123'){
            session(['bank_success' => 'confirmed']);
            return redirect()->route('bank_success');
        }

        return back()->with('code', 'Incorrect Bank Code contact support');
    }
}

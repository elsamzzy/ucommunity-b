<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('banksuccess');
    }

    public function index(User $user) {
        return view('dash.tax', [
            'user' => $user
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => ['max:9','min:6','required']
        ]);
        $code = $request['code'];
        if($code === '36548987'){
            session(['tax_success' => 'confirmed']);
            return redirect()->route('tax_success');
        }

        return back()->with('code', 'Incorrect Tax Code contact support');
    }
}

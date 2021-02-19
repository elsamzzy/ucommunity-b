<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ImfController extends Controller
{
    public function __construct()
    {
        $this->middleware('transcodesuccess');
    }

    public function index(User $user) {
        return view('dash.imf', [
            'user' => $user
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => ['max:10','min:7','required']
        ]);
        $code = $request['code'];
        if($code === '795321884'){
            session(['imf_success' => 'confirmed']);
            return redirect()->route('imf_success');
        }

        return back()->with('code', 'Incorrect International Monetary Fund Code contact support');
    }
}

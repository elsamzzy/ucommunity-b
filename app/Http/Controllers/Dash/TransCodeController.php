<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TransCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('taxsuccess');
    }

    public function index(User $user) {
        return view('dash.transcode', [
            'user' => $user
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => ['max:9','min:6','required']
        ]);
        $code = $request['code'];
        if($code === '5154645'){
            session(['trans_success' => 'confirmed']);
            return redirect()->route('transcode_success');
        }

        return back()->with('code', 'Incorrect Transfer Code contact support');
    }
}

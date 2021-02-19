<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AntiLandryController extends Controller
{
    public function __construct()
    {
        $this->middleware('imfsuccess');
    }

    public function index(User $user) {
        return view('dash.antilaundry', [
            'user' => $user
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => ['max:18','min:12','required']
        ]);
        $code = $request['code'];
        if($code === '7894523196541358'){
            session(['anti' => 'confirmed']);
            return redirect()->route('antilaundry_success');
        }

        return back()->with('code', 'Incorrect Code contact support');
    }
}

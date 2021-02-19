<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ImfSuccessController extends Controller
{
    public function __construct()
    {
        $this->middleware('imfsuccess');
    }

    public function index(User $user) {
        return view('dash.imfsuccess', [
            'user' => $user
        ]);
    }
}

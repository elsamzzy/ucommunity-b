<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TaxSuccessController extends Controller
{
    public function __construct()
    {
        $this->middleware('taxsuccess');
    }

    public function index(User $user) {
        return view('dash.taxsuccess', [
            'user' => $user
        ]);
    }
}

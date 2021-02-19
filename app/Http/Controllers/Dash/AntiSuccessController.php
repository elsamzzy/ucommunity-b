<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Mail\TransferSuccessful;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AntiSuccessController extends Controller
{
    public function __construct()
    {
        $this->middleware('anti');
    }

    public function index(User $user) {

        $details = session('trans_details');

        Mail::to(auth()->user()->email)->send(new TransferSuccessful($details));

        return view('dash.success', [
            'user' => $user
        ]);
    }
}

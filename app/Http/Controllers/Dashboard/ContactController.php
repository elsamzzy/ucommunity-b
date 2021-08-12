<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Mail\ActivateAccount;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct()
    {

    }

    public function index() {
        return view('dashboard.contact', [
            'user' => Auth::guard()->user()
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
           'message' => ['required', 'string']
        ]);
        try{
            Mail::to(config('mail.from.address'))->send(new ContactUs($request['message']));
            return back()->with('message', 'Successfully sent your message');
        } catch(\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}

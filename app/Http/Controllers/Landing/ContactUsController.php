<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsLanding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index() {
        return view('landing.contact');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'mobile' => ['required'],
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'message' => ['required', 'string']
        ]);
        try{
            Mail::to(config('mail.from.address'))->send(new ContactUsLanding($request));
            return back()->with('success', 'Successfully Sent');
        } catch (\Exception $exception){
            return back()->with('error', $exception->getMessage());
        }
    }
}

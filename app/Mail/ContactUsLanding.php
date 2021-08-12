<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsLanding extends Mailable
{
    use Queueable, SerializesModels;

    protected $message;
    protected $email;
    protected $name;
    protected $mobile;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->message = $request['message'];
        $this->email = $request['email'];
        $this->name = $request['name'];
        $this->mobile = $request['mobile'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail/contactuslanding', [
            'message' => $this->message,
            'email' => $this->email,
            'name' => $this->name,
            'mobile' => $this->mobile
        ])->subject('Message received from contact us landing page');
    }
}

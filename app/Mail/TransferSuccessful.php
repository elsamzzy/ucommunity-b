<?php

namespace App\Mail;

use App\Models\transactions;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TransferSuccessful extends Mailable
{
    use Queueable, SerializesModels;
    public $bank_name;
    public $bank_branch;
    public $bank_city;
    public $bank_code;
    public $account_name;
    public $account_number;
    public $amount;
    /**
     * Create a new message instance.
     *
     * @param transactions $transactions
     */
    public function __construct($details)
    {
        $this->bank_name = $details['0'];
        $this->bank_branch = $details['3'];
        $this->bank_city = $details['4'];
        $this->bank_code = $details['1'];
        $this->account_name = $details['2'];
        $this->account_number = $details['6'];
        $this->amount = $details['5'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.trasfer')
            ->subject('Your Transfer was successful');
    }
}

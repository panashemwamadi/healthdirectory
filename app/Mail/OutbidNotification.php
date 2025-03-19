<?php
// app/Mail/OutbidNotification.php

namespace App\Mail;

use App\Models\Bid;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OutbidNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $bid;

    public function __construct(Bid $bid)
    {
        $this->bid = $bid;
    }

    public function build()
    {
        return $this->subject('You Have Been Outbid')
                    ->view('emails.outbid_notification');
    }
}
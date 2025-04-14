<?php

// In App\Mail\AuctionWinnerNotification.php

namespace App\Mail;

use App\Models\Auction;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AuctionWinnerNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $auction;

    public function __construct(Auction $auction)
    {
        $this->auction = $auction;
    }

    public function build()
    {
        return $this->subject('Congratulations! You Won the Auction')
                    ->view('emails.winner_notification'); // Create this Blade view
    }
}

?>
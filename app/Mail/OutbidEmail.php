<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Auction;

class OutbidEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $auction;
    public $newBidAmount;

    /**
     * Create a new message instance.
     *
     * @param Auction $auction
     * @param float $newBidAmount
     */
    public function __construct(Auction $auction, $newBidAmount)
    {
        $this->auction = $auction;
        $this->newBidAmount = $newBidAmount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('You Have Been Outbid!')
                    ->view('emails.outbid') // Create this Blade view
                    ->with([
                        'auction' => $this->auction,
                        'newBidAmount' => $this->newBidAmount,
                    ]);
    }
}
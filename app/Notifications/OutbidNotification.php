<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Auction;

class OutbidNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $auction;
    protected $newBidAmount;

    public function __construct(Auction $auction, $newBidAmount)
    {
        $this->auction = $auction;
        $this->newBidAmount = $newBidAmount;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('You have been outbid!')
                    ->line('You have been outbid on the auction: ' . $this->auction->title)
                    ->line('New highest bid: $' . $this->newBidAmount)
                    ->action('View Auction', url('/auctions/' . $this->auction->id))
                    ->line('Thank you for using our auction service!');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OutbidEmail;
use Carbon\Carbon;

class BidController extends Controller
{
    public function store(Request $request, Auction $auction)
    {
        // Strict deadline validation (including time)
        if (!$this->isAuctionActive($auction)) {
            return redirect()->back()
                ->with('error', 'Auction has ended. No more bids are accepted.');
        }

        // Validate authenticated user
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'You must be logged in to place a bid.');
        }

        // Prevent bidding on own auction
        if ($auction->user_id === Auth::id()) {
            return redirect()->back()
                ->with('error', 'You cannot bid on your own auction.');
        }

        // Validate bid amount (minimum increment of 10)
        $request->validate([
            'amount' => [
                'required',
                'numeric',
                'min:' . ($auction->current_bid + 10.0),
                function ($attribute, $value, $fail) use ($auction) {
                    if ($value <= $auction->current_bid) {
                        $fail('Your bid must be higher than the current bid.');
                    }
                },
            ],
        ]);

        // Notify previous highest bidder if different user
        $this->notifyPreviousBidder($auction, $request->amount);

        // Create new bid
        $newBid = Bid::create([
            'auction_id' => $auction->id,
            'user_id' => Auth::id(),
            'amount' => $request->amount,
        ]);

        // Update auction current bid
        $auction->update(['current_bid' => $request->amount]);

        return redirect()->route('auctions.show', $auction)
            ->with('success', 'Bid placed successfully!');
    }

    /**
     * Check if auction is still active
     */
    protected function isAuctionActive(Auction $auction): bool
    {
        return $auction->is_active && 
               Carbon::now()->lt($auction->deadline);
    }

    /**
     * Notify previous highest bidder
     */
    protected function notifyPreviousBidder(Auction $auction, float $newBidAmount): void
    {
        if ($auction->current_bid > 0) {
            $previousBid = $auction->highestBid();
            
            if ($previousBid && $previousBid->user_id !== Auth::id()) {
                Mail::to($previousBid->user->email)
                    ->send(new OutbidEmail($auction, $newBidAmount));
            }
        }
    }
}
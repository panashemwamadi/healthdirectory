<?php
namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OutbidEmail; // Create this Mailable class

class BidController extends Controller
{
    public function store(Request $request, Auction $auction)
    {
        // Validate that the auction is active and not past the deadline
        if (!$auction->is_active || now()->isAfter($auction->deadline)) {
            return redirect()->back()->with('error', 'Auction has ended. No more bids are accepted.');
        }

        // Validate the bid amount
        $request->validate([
            'amount' => 'required|numeric|min:' . ($auction->current_bid + 10.0), // Ensure the bid is higher than the current bid
        ]);

        // Notify the previous highest bidder
        if ($auction->current_bid > 0) {
            $previousBid = $auction->highestBid();
            if ($previousBid && $previousBid->user_id !== Auth::id()) {
                $previousBidder = $previousBid->user;

                // Send email directly
                Mail::to($previousBidder->email)->send(new OutbidEmail($auction, $request->amount));
            }
        }

        // Create the new bid
        $newBid = Bid::create([
            'auction_id' => $auction->id,
            'user_id' => Auth::id(),
            'amount' => $request->amount,
        ]);

        // Update the auction's current bid
        $auction->update(['current_bid' => $request->amount]);

        return redirect()->route('auctions.index')->with('success', 'Bid placed successfully!');
    }
}
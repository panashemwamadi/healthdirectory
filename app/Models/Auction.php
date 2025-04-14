<?php

// app/Models/Auction.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function highestBid()
    {
        return $this->bids()->orderBy('amount', 'desc')->first();
    }

    public function highestBidder()
{
    return $this->hasOne(Bid::class)
        ->orderByDesc('amount')
        ->with('user');
}

// In App\Models\Auction.php
public function winningBid()
{
    return $this->hasOne(Bid::class)
        ->orderByDesc('amount')
        ->with('user'); // Eager load the user relationship
}

// In App\Models\Auction.php
// In App\Models\Auction.php
public function winner()
{
    return $this->hasOne(Bid::class)->orderBy('amount', 'desc')->with('user');
}
}


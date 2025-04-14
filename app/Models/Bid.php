<?php

// app/Models/Bid.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = ['auction_id', 'user_id', 'amount'];

    public function auction()
    {
        return $this->belongsTo(Auction::class);
    }

    public function testimoial()
    {
        return $this->belongsTo(Testimonial::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}

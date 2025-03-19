<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class welcome extends Controller
{
    //class welcome extends Controller

    //
    public function index()
    {
        
        $auctions = Auction::paginate(3); // Using Eloquent for auctions
        $testimonials = Testimonial::paginate(4);

                       
       
                    
        return view('welcome', [
            
            'auctions' => $auctions,
            'testimonials' => $testimonials,
        ]);
    }


}

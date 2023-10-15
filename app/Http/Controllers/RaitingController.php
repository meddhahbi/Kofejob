<?php

namespace App\Http\Controllers;

use App\Models\gig_rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RaitingController extends Controller
{
    public function addRating(Request $request){
         $stars_rated = $request->input('gig_rating');
         $gig_id = $request->input('gig_id');

         //dd($gig_id);

         gig_rating::create([
            'user_id'=> Cache::get('loggedInUserId'),
            'gig_id'=>$gig_id,
            'star_rating'=>$stars_rated,
            'message'=> $request->message,
         ]);

         return redirect()->back();

    }
}

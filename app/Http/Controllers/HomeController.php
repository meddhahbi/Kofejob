<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use App\Models\gig_rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Front.Home');
    }



    public function projects(){
      $gigs = Gig::select('id','title','description','orders','price', 'created_at')->get();

       return view('Front.Projects', compact('gigs'));
    }




    
    public function singleProject($id){


      
      $gig = Gig::find($id);

      $userRating = gig_rating::where('user_id', Cache::get('loggedInUserId'))
        ->where('gig_id', $id)
        ->first();


      if (!$gig) {
          return abort(404);
      }
  
      return view('Front.GigDetails', compact('gig','userRating'));
    }




}

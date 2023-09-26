<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;

class GigController extends Controller
{
    public function index(){
        $gigs = Gig::select();
        return view('Admin.Gigs.index', compact('gigs'));
    }


    public function create(){
        
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GigController extends Controller
{
    public function index(){
        $gigs = Gig::select();
        return view('Admin.Gigs.index', compact('gigs'));
    }



    public function indexForFreelancer(){

      $gigs = Gig::select();
      return view('Front.Gig.index', compact('gigs'));

    }




    public function create(){
        return view('Front.Gig.Add');
    }



    public function store(Request $request){


      $messages=$this->getMessages();

      $validator = Validator::make($request->all(),
        [
          'title'=>'required|max:50',
          'price'=>'required|numeric',
          'description'=>'required'
        ],
        $messages
        );


        if($validator->fails()){

          return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }



      Gig::create([
        'title'=> $request->title ,
        'price'=>$request->price,
        'description'=> $request->description,
        'orders'=>0,
      ]);


    
         return redirect()->route('Home')->with(['success'=>'Gig posted']);

    }


    protected function getMessages(){
      return $messages=[
       
          'title.required'=>'Title is required',
          'price.required'=>'Price is required',
          'description.required'=>'Description is required',
          'title.max'=>'Max of caracters 100',
          'price.numeric'=>'Price is a number' 
       
      ];
    }

}

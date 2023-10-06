<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class LoginController extends Controller
{

  
    public function showLogin(){
        return view('Auth.Login');
    }




    public function login(Request $request){
        

        $messages=$this->getMessages();

        $validator = Validator::make($request->all(),
          [
            'email'=>'required|email',
            'password'=>'required',
            
          ],
          $messages
          );
  
  
          if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput($request->all());
        }

        $user = User::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {

          $token = Str::random(60);
          $user->update(['remember_token' => hash('sha256', $token)]);



          if ($user->isAdmin()) {
           
            return Redirect::route('Admin.Home');
        }else {
          
          return Redirect::route('Home');
      }
        }



    }




  // public function logout (){

  //     $user = User::where('remember_token', Session::get('remember_token'))->first();

  //     if ($user) {
       
  //       $user->update(['remember_token' => null]);

       
  //       return Redirect::route('login');
  //   }

  //   return Redirect::route('login');

  //   }


    public function logout(Request $request){

      $user = User::where('email', $request->input('email'))->first();

      if ($user) {
          $user->update(['remember_token' => null]);
      }

    return redirect()->route('Home');

    }





    protected function getMessages(){
        return $messages=[
         
            'email.required'=>'Title is required',
            'email.email'=>'Email not valid',
            'password.required'=>'Password is required',
           
         
        ];
      }
}

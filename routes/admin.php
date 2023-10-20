<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GigController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(['middleware' => 'auth:admin'],function(){

//     Route::get('/',[DashboardController::class, 'index']);

     

// });


 Route::get('/',[DashboardController::class, 'index'])->name('HomeAdmin');

 Route::get('delete/{id}',[GigController::class,'destroy'])->name('Admin.Gig.delete');



//  Route::group(['middleware' => 'guest:admin'], function () {
   
//      Route::get('/login',[AdminLoginController::class, 'getLogin']);
//      Route::post('/login',[AdminLoginController::class, 'login'])->name('admin.login');

//  });




Route::get('/gigs',[GigController::class, 'index'])->name('admin.gigs');







<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GigController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\replyalertController;

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

Route::get('/alerts',[AlertController::class, 'index'])->name('admin.alerts');
Route::get('/alerts/{id}',[replyalertController::class, 'index'])->name('admin.alerts.reply');

Route::get('/storeReply/{id}',[replyalertController::class, 'store'])->name('admin.alerts.reply.store');
Route::get('/deleteReply/{id}',[replyalertController::class, 'destroy'])->name('admin.reply.delete');

//route to delete alert with alertId
Route:

Route::get('/deleteAlert/{id}',[AlertController::class, 'destroy'])->name('admin.alerts.delete');





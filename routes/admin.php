<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\GigController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlertController;

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

Route::get('/', function () {
    return view('Admin.Home');
});
 

Route::get('/gigs',[GigController::class, 'index'])->name('admin.gigs');

Route::get('/alerts',[AlertController::class, 'index'])->name('admin.alerts');

//route to delete alert with alertId
Route:

Route::get('/deleteAlert/{id}',[AlertController::class, 'destroy'])->name('admin.alerts.delete');

// Route::group(['middleware' => 'guest:admin'], function () {
   
//     Route::get('login',[AdminLoginController::class, 'getLogin']);

// });
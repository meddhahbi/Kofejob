<?php

use App\Http\Controllers\AdminLoginController;
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

// Route::get('/admin', function () {
//     return view('Admin.Dashboard');
// });
 

Route::get('/gigs',[GigController::class, 'index'])->name('admin.gigs');



// Route::group(['middleware' => 'guest:admin'], function () {
   
//     Route::get('login',[AdminLoginController::class, 'getLogin']);

// });
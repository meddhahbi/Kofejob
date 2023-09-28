<?php

use App\Http\Controllers\GigController;
use App\Http\Controllers\HomeController;
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

Route::get('/dash', function () {
    return view('Front.Dashboard');
});




// Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('Home');


Route::get('create',[GigController::class,'create'])->name('Front.Gig.Add');
Route::post('store',[GigController::class,'store'])->name('Front.Gig.store');

Route::get('/gigs',[GigController::class, 'indexForFreelancer'])->name('Front.Gig.index');



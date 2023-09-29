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


Route::get('edit/{id}',[GigController::class,'edit'])->name('Front.Gig.Edit');
Route::post('update/{id}',[GigController::class,'update'])->name('Front.Gig.update');


Route::get('delete/{id}',[GigController::class,'destroy'])->name('Front.Gig.delete');




Route::get('/gigs',[GigController::class, 'indexForFreelancer'])->name('Front.Gig.index');



<?php

use App\Http\Controllers\GigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CondidatController;
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




Route::get('/condidats', [CondidatController::class, 'index'])->name('Front.Condidat.index');
Route::get('/condidats/create', [CondidatController::class, 'create'])->name('Front.Condidat.create');
Route::post('/condidats/store', [CondidatController::class, 'store'])->name('Front.Condidat.store');
Route::get('/condidats/edit/{id}', [CondidatController::class, 'edit'])->name('Front.Condidat.edit');
Route::post('/condidats/update/{id}', [CondidatController::class, 'update'])->name('Front.Condidat.update');
Route::delete('/condidats/destroy/{id}', [CondidatController::class, 'destroy'])->name('Front.Condidat.destroy');



Route::get('/condidatsAdmin', [CondidatController::class, 'indexx'])->name('Admin.Condidat.index');
Route::get('/condidatsAdmin/show/{id}', [CondidatController::class, 'show'])->name('Admin.Condidat.show');
Route::delete('/condidatsAdmin/destroy/{id}', [CondidatController::class, 'destroyy'])->name('Admin.Condidat.destroy');



Route::get('create',[GigController::class,'create'])->name('Front.Gig.Add');
Route::post('store',[GigController::class,'store'])->name('Front.Gig.store');


Route::get('edit/{id}',[GigController::class,'edit'])->name('Front.Gig.Edit');
Route::post('update/{id}',[GigController::class,'update'])->name('Front.Gig.update');


Route::get('delete/{id}',[GigController::class,'destroy'])->name('Front.Gig.delete');




Route::get('/gigs',[GigController::class, 'indexForFreelancer'])->name('Front.Gig.index');





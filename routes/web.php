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

////////////Category
Route::get('/category',[\App\Http\Controllers\CategoryController::class,'index'])->name('category.index');;
Route::post('/category/add',[\App\Http\Controllers\CategoryController::class,'store']);
Route::get('edit-category/{id}',[\App\Http\Controllers\CategoryController::class,'edit']);
Route::put('updateCategory',[\App\Http\Controllers\CategoryController::class,'update']);
Route::delete('deleteCategory',[\App\Http\Controllers\CategoryController::class,'destroy']);


/////Projets///////////////
Route::get('/projet',[\App\Http\Controllers\ProjetController::class,'index'])->name('projet.index');
Route::get('edit-projet/{id}',[\App\Http\Controllers\ProjetController::class,'edit']);
Route::delete('deleteProjet',[\App\Http\Controllers\ProjetController::class,'destroy']);
Route::put('updateProjet',[\App\Http\Controllers\ProjetController::class,'update']);
Route::post('/projet/add',[\App\Http\Controllers\ProjetController::class,'store']);
Route::get('/projetFront',[\App\Http\Controllers\ProjetController::class,'indexFront'])->name('projet.indexFront');;
Route::get('/projetFront2',[\App\Http\Controllers\ProjetController::class,'indexFront2'])->name('projet.indexFront2');;


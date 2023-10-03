<?php

use App\Http\Controllers\GigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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


Route::get('/blogs', [BlogController::class, 'index'])->name('Index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('CreateBlog');
Route::post('/blogs/store', [BlogController::class, 'store'])->name('StoreBlog');
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('EditBlog');
Route::post('/blogs/update/{id}', [BlogController::class, 'update'])->name('UpdateBlog');
Route::delete('/blogs/destroy/{id}', [BlogController::class, 'destroy'])->name('DestroyBlog');
Route::delete('/blogs/destroyAdmin/{id}', [BlogController::class, 'destroyAdmin'])->name('DestroyBlogAdmin');
Route::get('/blogsAdmin', [BlogController::class, 'indexAdmin'])->name('IndexAdmin');
Route::get('/blogDetails/{id}', [BlogController::class, 'show'])->name('DetailsBlog');



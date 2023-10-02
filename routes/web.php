<?php

use App\Http\Controllers\GigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
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

// Route::get('/', function () {
//     return view('Front.Home');
// });




// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('Home');


Route::get('create',[GigController::class,'create'])->name('Front.Gig.Add');
Route::post('store',[GigController::class,'store'])->name('Front.Gig.store');


Route::get('/admin/skill',[SkillController::class,'index'])->name('admin.skills.index');
Route::get('/admin/skill/create',[SkillController::class,'create'])->name('admin.skills.create');
Route::post('/admin/skill/store', [SkillController::class, 'store'])->name('admin.skills.store');
Route::get('/admin/skill/{skill}/edit', [SkillController::class, 'edit'])->name('admin.skills.edit');
Route::patch('/admin/skill/{skill}', [SkillController::class, 'update'])->name('admin.skills.update');
Route::delete('/admin/skill/{skill}', [SkillController::class, 'destroy'])->name('admin.skills.destroy');








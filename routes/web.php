<?php

use App\Http\Controllers\GigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CondidatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RaitingController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/allgigs', [HomeController::class, 'projects'])->name('projects');




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



Route::get('/admin/skill',[SkillController::class,'index'])->name('admin.skills.index');
Route::get('/admin/skill/create',[SkillController::class,'create'])->name('admin.skills.create');
Route::post('/admin/skill/store', [SkillController::class, 'store'])->name('admin.skills.store');
Route::get('/admin/skill/{skill}/edit', [SkillController::class, 'edit'])->name('admin.skills.edit');
Route::patch('/admin/skill/{skill}', [SkillController::class, 'update'])->name('admin.skills.update');
Route::delete('/admin/skill/{skill}', [SkillController::class, 'destroy'])->name('admin.skills.destroy');

Route::get('edit/{id}',[GigController::class,'edit'])->name('Front.Gig.Edit');
Route::post('update/{id}',[GigController::class,'update'])->name('Front.Gig.update');
Route::get('delete/{id}',[GigController::class,'destroy'])->name('Front.Gig.delete');
Route::get('/gigs',[GigController::class, 'indexForFreelancer'])->name('Front.Gig.index');
Route::get('/gigs/{id}', [HomeController::class, 'singleProject'])->name('gig.show');

Route::post('/add-rating', [RaitingController::class, 'addRating'])->name('Raiting.store');



 Route::get('/login',[LoginController::class, 'showLogin'])->name('login');
 Route::post('/login',[LoginController::class, 'login'])->name('user.login');




 Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
 Route::post('/register',[RegisterController::class, 'register'])->name('user.register');



 Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//  Route::get('/check', [LoginController::class, 'checkIdUser'])->name('check');





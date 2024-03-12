<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\postController;
use App\Livewire\Admin\Comments;
use App\Livewire\Admin\Users;
use App\Livewire\Commentlivewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\Admin\Posts;
use App\Livewire\Avatarchange;
use App\Livewire\Dashboardlivewire;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('welcome');


Route::get('/dashboard', [dashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/userdash',function () {return view('userdash');} )->middleware(['auth', 'verified'])->name('userdash');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('dashboardlivewire',Dashboardlivewire::class );
    Route::get('/showpost/{post}',[postController::class,'show'] )->name('showpost');
    Route::get('commentlivewire',Commentlivewire::class );
    Route::get('avatarchange',Avatarchange::class );
});

Route::middleware(['auth','isadmin', 'verified'])->group(function () {

    Route::get('/admin.index', function () {return view('admin/index');})->name('admin.index');
    Route::get('/showusers',function () {return view('admin/showusers');})->name('showusers');
    Route::get('/showposts',function () {return view('admin/showposts');})->name('showposts');
    Route::get('/showcomments',function () {return view('admin/showcomments');})->name('showcomments');
    Route::get('users',Users::class );
    Route::get('posts',Posts::class );
    Route::get('comments',Comments::class );
});


require __DIR__.'/auth.php';

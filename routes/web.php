<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\postController;
use App\Livewire\Commentlivewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('dashboardlivewire',Dashboardlivewire::class );
    Route::get('/showpost/{post}',[postController::class,'show'] )->name('showpost');
    Route::get('commentlivewire',Commentlivewire::class );
    Route::get('avatarchange',Avatarchange::class );
});

require __DIR__.'/auth.php';

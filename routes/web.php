<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Middleware\CheckPostmanRequest;
use Illuminate\Support\Facades\Route;

 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('activities', ActivityController::class);
});


Route::get('/token', function () {
    return csrf_token(); 
})->middleware(CheckPostmanRequest::class);


require __DIR__.'/auth.php';

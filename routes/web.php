<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\CheckPostmanRequest;
use Illuminate\Support\Facades\Route;

 
Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('contacts', ContactController::class)->only([
    'create', 'store'
]);

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('/rooms.html', function () {
    return view('rooms');
});
Route::get('/details.html', function () {
    return view('details');
});
Route::get('/offers.html', function () {
    return view('offers');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Route::resource('activities', ActivityController::class);
});


Route::get('/token', function () {
    return csrf_token(); 
})->middleware(CheckPostmanRequest::class);


require __DIR__.'/auth.php';

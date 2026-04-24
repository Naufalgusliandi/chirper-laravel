<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChirpController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Redirect dashboard ke halaman chirps agar lebih praktis
Route::get('/dashboard', function () {
    return redirect()->route('chirps.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Chirps
Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
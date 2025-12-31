<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Main Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Additional routes can be added here
Route::get('/services', function () {
    return view('home'); // Will be handled by frontend routing
});

Route::get('/contact', function () {
    return view('home'); // Will be handled by frontend routing
});

// API Routes for future use
Route::prefix('api')->group(function () {
    Route::post('/check-eligibility', [HomeController::class, 'checkEligibility']);
    Route::post('/book-consultation', [HomeController::class, 'bookConsultation']);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OwnerDashboardController;
use App\Http\Controllers\KostController;

Route::get('/', [LandingController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/owner/dashboard', [OwnerDashboardController::class, 'index']);
    Route::post('/kost/store', [KostController::class, 'store']);
    Route::delete('/kost/delete/{id}', [KostController::class, 'destroy']);
});

Route::get('/kost/edit/{id}', [KostController::class,'edit']);
Route::put('/kost/update/{id}', [KostController::class,'update']);
Route::get('/kost/{id}', [LandingController::class,'detail']);


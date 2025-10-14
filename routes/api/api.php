<?php


use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\v1\AuthController;

// Route::get('/login', [AuthController::class, 'login']);
Route::middleware('guest')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/registration', [AuthController::class, 'registration']);
});


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

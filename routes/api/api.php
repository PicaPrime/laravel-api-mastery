<?php

use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

// Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/registration', [AuthController::class, 'registration']);



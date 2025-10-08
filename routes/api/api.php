<?php


use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\v1\AuthController;

// Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/registration', [AuthController::class, 'registration']);

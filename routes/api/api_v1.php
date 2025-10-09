
<?php

use App\Http\Controllers\api\v1\TicketController;
use App\Http\Controllers\api\v1\AuthController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    Route::apiResource('tickets', TicketController::class);
});

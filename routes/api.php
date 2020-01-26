<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TriangleController;
use App\Http\Controllers\Api\CircleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/triangle/{a}/{b}/{c}', [TriangleController::class, 'calculate']);
Route::get('/circle/{radius}', [CircleController::class, 'calculate']);

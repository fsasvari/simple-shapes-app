<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [IndexController::class, 'welcome']);

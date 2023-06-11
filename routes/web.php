<?php

use App\Http\Controllers\LoadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoadController::class, 'index']);
Route::get('/login', [LoadController::class, 'loginpage']);
Route::get('/home', [LoadController::class, 'homepage']);

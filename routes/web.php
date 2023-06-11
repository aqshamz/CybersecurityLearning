<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoadController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/register', [LoadController::class, 'index']);
Route::post('/register', [AuthController::class, 'doRegisterUser']);
Route::get('/login', [LoadController::class, 'loginpage']);
Route::post('/login', [AuthController::class, 'doLoginUser']);
Route::get('/', [LoadController::class, 'homepage']);

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
Route::post('/register', [AuthController::class, 'doRegisterUser'])->name('doRegisterUser');
Route::get('/login', [LoadController::class, 'loginpage'])->name('login');
Route::post('/login', [AuthController::class, 'doLoginUser'])->name('doLoginUser');
Route::get('/', [LoadController::class, 'homepage'])->middleware('logedonly');
Route::get('/home', [LoadController::class, 'homepage'])->name('home')->middleware('logedonly');
Route::get('/aboutus', [LoadController::class, 'aboutus'])->name('aboutus')->middleware('logedonly');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('quiz', [AuthController::class, 'getquiz'])->name('getquiz')->middleware('logedonly');
Route::post('quiztest', [AuthController::class, 'quiztest'])->name('quiztest');
Route::get('quizresult', [AuthController::class, 'quizresult'])->name('quizresult');


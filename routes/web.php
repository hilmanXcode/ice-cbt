<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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


Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth/check', [LoginController::class, 'checkAuth']);
Route::post('/auth/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/users', [DashboardController::class, 'users'])->middleware('auth');
Route::get('/dashboard/user/create', [DashboardController::class, 'addUser'])->middleware('auth');
Route::post('/dashboard/user/create', [DashboardController::class, 'insertUser'])->middleware('auth');

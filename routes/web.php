<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

//User Routes
Route::get('/dashboard/users', [UserController::class, 'index'])->middleware('auth');
Route::get('/dashboard/users/create', [UserController::class, 'create'])->middleware('auth');
Route::post('/dashboard/users/create', [UserController::class, 'store'])->middleware('auth');
Route::get('/dashboard/users/{id}/edit', [UserController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/users/{id}/edit', [UserController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/users/{id}', [UserController::class, 'delete'])->name('siswa.delete')->middleware('auth');
//User->admin Routes
Route::get('/dashboard/staff', [UserController::class, 'indexadmin'])->name('admin.index')->middleware('auth');

//Kelas Routes
Route::get('/dashboard/kelas', [KelasController::class, 'index'])->name('kelas.index')->middleware('auth');
Route::get('/dashboard/kelas/create', [KelasController::class, 'create'])->name('kelas.create')->middleware('auth');
Route::get('/dashboard/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit')->middleware('auth');
Route::post('/dashboard/kelas/{id}/edit', [KelasController::class, 'update'])->name('kelas.edit')->middleware('auth');
Route::post('/dashboard/kelas/create', [KelasController::class, 'store'])->name('kelas.store')->middleware('auth');
Route::delete('/dashboard/kelas/{id}', [KelasController::class, 'delete'])->name('kelas.delete')->middleware('auth');

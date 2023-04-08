<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardGenreController;
use App\Http\Controllers\DashboardNovelController;
use App\Http\Controllers\DashboardVolumeController;

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

// Rute Novel
Route::get('/', [NovelController::class, 'index']);
Route::get('/novel/{novel:slug}', [NovelController::class, 'detail']);
Route::get('/novel/{novel:slug}/{volume:slug}', [NovelController::class, 'volume']);

// Rute Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

// Rute Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

// Rute Dashboard Novel
Route::resource('/dashboard/novel', DashboardNovelController::class)->middleware('auth');
Route::resource('/dashboard/novel/{novel:slug}/volume', DashboardVolumeController::class)->middleware('auth');
Route::resource('/dashboard/genre', DashboardGenreController::class)->middleware('auth');
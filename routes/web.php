<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardGenreController;
use App\Http\Controllers\DashboardNovelController;
use App\Http\Controllers\DashboardVolumeController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardArchiveNovelController;
use App\Http\Controllers\DashboardArchiveVolumeController;

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

// Rute Bookmark
Route::get('/bookmark', [NovelController::class, 'bookmark']);

// Rute author
Route::get('/author', [AuthorController::class, 'index']);
Route::get('/author/{user}', [AuthorController::class, 'profile']);
Route::post('/author/{user}', [AuthorController::class, 'follow']);
Route::delete('/author/{user}', [AuthorController::class, 'unfollow']);

// Rute Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

// Rute Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

// Rute Logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Rute Dashboard Novel
Route::resource('/dashboard/novel', DashboardNovelController::class)->middleware('auth');

// Rute Dashboard Volume
Route::resource('/dashboard/novel/{novel:slug}/volume', DashboardVolumeController::class)->middleware('auth');

// Rute Dashboard Genre
Route::resource('/dashboard/genre', DashboardGenreController::class)->middleware('admin');

// Rute Dashboard Volume
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('admin');

// Rute Archive Novel
Route::get('/dashboard/archive/novel/', [DashboardArchiveNovelController::class, 'index'])->middleware('auth');
Route::post('/dashboard/archive/novel/{novel:slug}', [DashboardArchiveNovelController::class, 'archive'])->middleware('auth');
Route::put('/dashboard/archive/novel/{novel:slug}', [DashboardArchiveNovelController::class, 'unarchive'])->middleware('auth');

// Rute Archive Volume
Route::get('/dashboard/archive/volume', [DashboardArchiveVolumeController::class, 'index'])->middleware('auth');
Route::post('/dashboard/archive/volume', [DashboardArchiveVolumeController::class, 'archive'])->middleware('auth');
Route::put('/dashboard/archive/volume', [DashboardArchiveVolumeController::class, 'unarchive'])->middleware('auth');

// RUte Profile
Route::get('/dashboard/profile', [DashboardProfileController::class, 'index'])->middleware('auth');
Route::put('/dashboard/profile', [DashboardProfileController::class, 'update'])->middleware('auth');
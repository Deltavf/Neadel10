<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovelController;

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

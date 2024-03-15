<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
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

/* DASHBOARD */

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/upload', [DashboardController::class, 'upload'])->name('dashboard.upload');

Route::get('/ranking', [DashboardController::class, 'ranking'])->name('dashboard.ranking');

/* GAMES */

Route::patch('/games/{game}', [GameController::class, 'updateLike'])->name('games.update.like');

Route::post('/games', [GameController::class, 'store'])->name('games.store');

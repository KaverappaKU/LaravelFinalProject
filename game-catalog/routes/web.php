<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('games/trash/{id}',[GameController::class, 'trash'])->name('games.trash');
    Route::get('games/trashed/',[GameController::class, 'trashed'])->name('games.trashed');
    Route::get('games/restore/{id}',[GameController::class, 'trash'])->name('games.restore');
    Route::resource('games', GameController::class);
});


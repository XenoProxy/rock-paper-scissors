<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Lobby;
use App\Http\Livewire\Game;

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

Route::get('/' , App\Http\Livewire\Lobby::class)->name('lobby');
Route::get('/game{game}', App\Http\Livewire\Game::class)->name('game');

<?php

use App\Http\Controllers\FestivalController;
use App\Http\Controllers\SlideController;
use App\Http\Livewire\BandsTable;
use App\Http\Livewire\FestivalsTable;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('slide/{slide}', SlideController::class)->name('slide');

Route::get('bands', BandsTable::class)->name('bands');
Route::get('festivals', FestivalsTable::class)->name('festivals');
Route::get('festival/{festival}', FestivalController::class)->name('festival');

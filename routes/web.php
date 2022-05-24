<?php

use App\Http\Controllers\PlayerInfoController;
use App\Http\Controllers\PlayerStatsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', [PlayerInfoController::class, 'index'])->name('player.info');
Route::get('/players/exportToCSV', [PlayerInfoController::class, 'exportToCSV'])->name('player.info.export.csv');
Route::get('/players/exportToJSON', [PlayerInfoController::class, 'exportToJSON'])->name('player.info.export.json');

// Report 1 of SQL Query Design Test
Route::get('/playerStats', [PlayerStatsController::class, 'index'])->name('player.stats');
Route::get('/playerStats/exportToCSV', [PlayerStatsController::class, 'exportToCSV'])->name('player.stats.export.csv');
Route::get('/playerStats/exportToJSON', [PlayerStatsController::class, 'exportToJSON'])->name('player.stats.export.json');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

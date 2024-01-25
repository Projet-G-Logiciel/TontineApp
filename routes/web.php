<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingMeetController;
use App\Http\Controllers\SeanceController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/settingMeet', [SettingMeetController::class, 'setting'])->name('settingMeet');
    Route::post('/settingMeet', [SettingMeetController::class, 'settingStore'])->name('settingMeetStore');
    Route::get('/seance', [SeanceController::class, 'seance'])->name('seance');
});

require __DIR__.'/auth.php';

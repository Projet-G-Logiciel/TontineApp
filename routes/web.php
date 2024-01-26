<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VersementController;
use App\Http\Controllers\SettingMeetController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

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
    Route::post('/addcotisation', [VersementController::class, 'addcotisation'])->name('storeCotisation');
    Route::post('/addEpargne', [VersementController::class, 'addEpargne'])->name('storeEpargne');

    Route::post('/demandeEmprunt', [EmpruntController::class, 'demandeEmprunt'])->name('storeDemandeEmprunt');

});
Route::get('/member', [HomeController::class, 'liste_membre'])->name('membre');
Route::post('/add_membre', [HomeController::class, 'add_membre'])->name('add');
Route::get('/delete_membre/{id}', [HomeController::class, 'delete_membre'])->name('delete_membre');
Route::get('/notification', [HomeController::class, 'notification'])->name('notification');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\RemboursementController;

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

    Route::get('/emprunt', [EmpruntController::class, 'show'])->name('emprunt.show');
    Route::get('/remboursement', [RemboursementController::class, 'show'])->name('remboursement.show');

    Route::get('/settingMeet', [SettingMeetController::class, 'setting'])->name('settingMeet');
    Route::post('/settingMeet', [SettingMeetController::class, 'settingStore'])->name('settingMeetStore');

    Route::get('/seance', [SeanceController::class, 'seance'])->name('seance');
    Route::post('/addcotisation', [VersementController::class, 'addcotisation'])->name('storeCotisation');
    Route::post('/addEpargne', [VersementController::class, 'addEpargne'])->name('storeEpargne');

    Route::post('/demandeEmprunt', [EmpruntController::class, 'demandeEmprunt'])->name('storeDemandeEmprunt');

});
//gestion des membres
Route::get('/member', [HomeController::class, 'liste_membre'])->name('membre');
Route::post('/add_membre', [HomeController::class, 'add_membre'])->name('add');
Route::get('/delete_membre/{id}', [HomeController::class, 'delete_membre'])->name('delete_membre');

//malheur
Route::get('/malheur', [HomeController::class, 'Signaler_malheur'])->name('malheur');
Route::post('/signaler_malheur', [HomeController::class, 'update_malheur'])->name('signaler_malheur');

//rapports
Route::get('/rapports', [HomeController::class, 'rapports'])->name('rapports');
Route::get('/rapport_seance/{id}', [HomeController::class, 'rapport_seance'])->name('rapport_seance');



require __DIR__.'/auth.php';

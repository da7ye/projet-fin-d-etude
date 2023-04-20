<?php

use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OffreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\ReclamationController;



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

Route::get('/', [SidebarController::class, 'index'] );

Route::get('/dashboard', [SidebarController::class, 'dashboard'] )->name('dashboard');
Route::get('/catalogues.index', [SidebarController::class,'catalogue'] )->name('catalogue');
// Route::get('/reclamations.index', [SidebarController::class, 'reclamation'] )->name('reclamation');
Route::get('/statistiques.index', [SidebarController::class, 'statistique'] )->name('statistique');
Route::get('/historiques.appel', [SidebarController::class, 'historique'] )->name('historique');


// Offre routes:
Route::get('/offres.index', [OffreController::class, 'index'] )->name('offres');
Route::get('/offres.create', [OffreController::class, 'create'] )->name('offres.create');
Route::post('/offres', [OffreController::class, 'store'] )->name('offres.store');
Route::get('/offres/{offre}/edit', [OffreController::class, 'edit'] )->name('offres.edit');
Route::put('/offres/{offre}', [OffreController::class, 'update'] )->name('offres.update');
Route::delete('/offres/{offre}', [OffreController::class, 'destroy'] )->name('offres.destroy');


// historiques routes:
Route::get('/historiques.appel', [HistoriqueController::class, 'appel'] )->name('historiques.appel');
Route::get('/historiques.sms', [HistoriqueController::class, 'sms'] )->name('historiques.sms');
Route::get('/historiques.internet', [HistoriqueController::class, 'internet'] )->name('historiques.internet');
Route::get('/historiques.recharge', [HistoriqueController::class, 'recharge'] )->name('historiques.recharge');
Route::get('/historiques.service', [HistoriqueController::class, 'service'] )->name('historiques.service');


// reclamation routes:
// Route::get('/reclamations.index', [ReclamationController::class, 'index'])->name('reclamations.index');
// // Route::get('/reclamations', [ReclamationController::class, 'index'] )->name('reclamations.index');
// Route::get('/reclamations.create', [ReclamationController::class, 'create'] )->name('reclamations.create');
// Route::post('/reclamations', [ReclamationController::class, 'store'] )->name('reclamations.store');
// Route::get('/reclamations/{Reclamation}/edit', [ReclamationController::class, 'edit'])->name('reclamation.edit');
// Route::put('/reclamations/{Reclamation}', [ReclamationController::class, 'update'])->name('reclamations.update');
// Route::delete('/reclamations/{Reclamation}', [ReclamationController::class, 'destroy'])->name('reclamations.destroy');

Route::resource('reclamations',ReclamationController::class);



// profile routes:
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});











require __DIR__.'/auth.php';

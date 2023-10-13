<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\OpérateurController;
use App\Http\Controllers\ProduitController;
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

//page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('accueil');

//route qui retourne la vue service.blade.php dans layouts/app.blade.php
Route::get('/services', function () {
    return view('services.service');
})->name('service');

//route qui retourne la vue transaction.blade.php dans layouts/app.blade.php
Route::get('/opérateur', function () {
    return view('opérateurs.transaction');
})->name('opérateur');

//route qui retourne la vue reçue.blade.php dans layouts/app.blade.php
Route::get('/ventes', function () {
    return view('ventes.reçue');
})->name('reçue');

//route qui retourne la vue produit.blade.php dans layouts/app.blade.php
Route::get('/produits', function () {
    return view('produits.produit');
})->name('produit');

//route qui retourne la vue commande.blade.php dans layouts/app.blade.php
Route::get('/commandes', function () {
    return view('commandes.commande');
})->name('commande');


//les routes de ServiceController sauf services.service en haut
Route::controller(ServiceController::class)->group(function () {
    // liste des services
    Route::get('/listeServices', 'index')->name('services.index');
    Route::get('/AjouterService', 'create')->name('services.create');
    Route::get('/EditerService/{service}', 'edit')->name('services.edit');
    Route::post('/EnregistrerService', 'store')->name('services.store');
    Route::delete('/SupprimerService/{service}', 'destroy')->name('services.destroy');
    Route::put('/UpdateService/{service}', 'update')->name('services.update');

});
//routes de commandeController
Route::controller(CommandeController::class)->group(function () {
    // liste des commandes
    Route::get('/listeCommande', 'index')->name('commandes.index');
    Route::get('/AjouterCommande', 'create')->name('commandes.create');
    Route::get('/EditerCommande/{id}', 'edit')->name('commandes.edit');
    Route::post('/EnregistrerCommande', 'store')->name('commandes.store');
    Route::delete('/SupprimerCommande/{commande}', 'destroy')->name('commandes.destroy');
    Route::put('/UpdateCommande/{commande}', 'update')->name('commandes.update');
    Route::get('/VoirCommande', 'show')->name('commandes.show');
});




//routes de OpérateurController
Route::controller(OpérateurController::class)->group(function () {
    Route::get('/listeTransactions', 'index')->name('opérateurs.index');
    Route::get('/AjouterTransactions', 'create')->name('opérateurs.create');
    Route::get('/EditerTransactions/{id}', 'edit')->name('opérateurs.edit');
    Route::post('/EnregistrerTransactions', 'store')->name('opérateurs.store');
    Route::delete('/SupprimerTransactions/{opérateur}', 'destroy')->name('opérateurs.destroy');
    Route::put('/ModifierTransactions/{opérateur}', 'update')->name('opérateurs.update');
    Route::get('/VoirTransaction', 'show')->name('opérateurs.show');
});

//routes de ProduitController
Route::controller(ProduitController::class)->group(function () {
    Route::get('/listeproduits', 'index')->name('produits.index');
    Route::get('/Ajouterproduits', 'create')->name('produits.create');
    Route::get('/Editerproduits/{id}', 'edit')->name('produits.edit');
    Route::post('/Enregistrerproduits', 'store')->name('produits.store');
    Route::delete('/Supprimerproduits/{opérateur}', 'destroy')->name('produits.destroy');
    Route::put('/Modifierproduits/{opérateur}', 'update')->name('produits.update');
    Route::get('/Voirproduit', 'show')->name('produits.show');
});












//routes d'authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';

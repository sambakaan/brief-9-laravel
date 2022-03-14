<?php

use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PaysController;
use App\Models\Entreprise;
use App\Models\Pays;
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

Route::get('/pays', [PaysController::class, 'index']);


/**
 * /entreprises/create -> formulaire d'ajout
*entreprises/store -> traitement du formulaire d'ajout
*entreprises/edit/{id} -> formulaire de modification
*entreprises/update/{id} -> traitement du formulaire de modification
*entreprises/destroy/{id} -> suppression
 */

Route::get('/entreprises', [EntrepriseController::class,'index'])->name('entreprises.index');
Route::get('/entreprises/create', [EntrepriseController::class,'create'])->name('entreprises.create');
Route::post('/entreprises/store',[EntrepriseController::class,'store'])->name('entreprises.store');
Route::get('/entreprises/{entreprise}',[EntrepriseController::class,'show'])->name('entreprises.show');

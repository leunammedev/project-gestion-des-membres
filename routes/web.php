<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembreController;
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

Auth::routes();
// pour afficher le dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');
//afficher la page d'ajout
Route::get('/membres', [MembreController::class, 'getmembre'])->name('getmembre'); 
//enregistre le membre
Route::post('/membres', [MembreController::class, 'store'])->name('ajoutmembre');
// Route::post('/addUser', [MembreController::class, 'addUser']);

Route::get('/modifier-membre/{id}', [MembreController::class, 'modifier']);
Route::put('/update-membre/{id}', [MembreController::class, 'update'])->name('update');
Route::get('delete-membre/{id}', [MembreController::class, 'destroy']);

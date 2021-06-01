<?php

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
Route::get('/publier', function () {
    return view('immo.publier');
})->middleware('auth');
Route::get('/rechercher', function () {
    return view('immo.recherche');
});
/*Route::get('/', function () {
    return view('immo.accueil');
});*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/deconnexion', 'App\Http\Controllers\HomeController@deconnexion');
Route::get('/compte', function () {
    return view('immo.compte');
})->middleware('auth');
Route::get('/accueil', function () {
    return view('immo.accueil');
});

Route::post('/immobilier/store', [App\Http\Controllers\bien_immobilierController::class, 'store'])->name('publier')->middleware('auth');
Route::get('/', [App\Http\Controllers\bien_immobilierController::class, 'index'])->name('accueil');


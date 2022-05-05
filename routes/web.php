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

/* Route::get('/', function () {
    return view('welcome');
});  */
/* Route::get('/home ', function () {
    return view('guest.home');
}) ->name('home-page'); */



Route::get('/', function () {
    $comics = config('comics');
    return view('guest.home-page', ["comics" => $comics]);
})->name('home-page');

Route::get('/home/{id}', function ($id) {
    //prendo tutti i fumetti
    $comics = config('comics');
    //se l'id è un numero e maggiore di zero e minore della lunghezza dell'array dei fumetti
    if( is_numeric($id) &&  $id >= 0  && $id < count($comics)){
        /* ritornami la view del fumetto con il singolo fumetto */
        return view('guest.comic', ["fumetto" => $comics[$id]]); //fumetto sta per la nuova variabile dei comocs
        /* altrimenti dammi l'errore */
    } else{
        abort(404);
    }


})->name('guest-comic');
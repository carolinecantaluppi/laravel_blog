<?php
/*
|--------------------------------------------------------------------------
| Web Routes  
|       -> nel file web ho solo la logica delle mie ruotte.
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ChisiamoController;
use App\Http\Controllers\DovesiamoController;
use App\Http\Controllers\UtenteController;
use Illuminate\Support\Facades\Route;

// named routes : dare un nome alla rotta.

Route::get('/', [PublicController::class, "home"])->name('home');    
// la freccia -> accessa l'oggetto ('').   
// -> serve per nomeare la URI e usare nel link della navbar. così posso fare modifiche solo qua. 

Route::get('/chi-siamo', [ChisiamoController::class, "chiSiamo"])->name('chi-siamo');  
// 'qua dentro è la uri'.

Route::get('/dove-siamo', [DovesiamoController::class, "doveSiamo"])->name('dove-siamo');

Route::get('/utenti', [PublicController::class, "utenti"])->name('utenti');

Route::get('/utente/{key}', [UtenteController::class, "key"])->where('key', '[0-9]+')->name('utente');        // accetta solo lettere.

// pagina dei contatti
Route::get('/contact', [PublicController::class, "contact"])->name('contact');
Rout::post("/contact/submit", [PublicController::class, "submit"])->name("submit");


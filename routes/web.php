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
// named routes : dare un nome alla rotta.

Route::get('/', function () {
    return view('welcome');
})->name('home');                                // la freccia -> accessa l'oggetto ('').   
// -> serve per nomeare la URI e usare nel link della navbar. così posso fare modifiche solo qua. 

Route::get('/chi-siamo', function () {      // 'qua dentro è la uri'.
    return view('chisiamo');
})->name('chi-siamo');

Route::get('/dove-siamo', function () {      
    return view('dovesiamo');
})->name('dove-siamo');


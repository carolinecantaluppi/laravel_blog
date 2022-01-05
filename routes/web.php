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

Route::get('/utenti', function(){
    // simuliamo un data base (db) di utenti:
    $users = [
        ["name"=>"Na", "lastname"=>'Ne', 'age'=>33],
        ["name"=>"Ni", "lastname"=>'No', 'age'=>35],
        ["name"=>"Nu", "lastname"=>'Ma', 'age'=>29],
        ["name"=>"Me", "lastname"=>'Mi', 'age'=>29],
        ["name"=>"Mo", "lastname"=>'Mu', 'age'=>25],
        ["name"=>"Mo", "lastname"=>'Ka', 'age'=>21],
    ]; // query all db che restituisce tutti gli utenti
    return view('utenti',["users"=>$users]);
})->name('utenti');

Route::get('/utente/{name}', function ($name) {    
    //dd($name);                                          dd = dumper_died. usare come check, dopo elimina.  
    // passare il parametro alla vista
    return view('utente', ["name"=>$name]);            // array associativo chiave->valore.
})->where('name', '[A-Za-z]+')->name('utente');        // accetta solo lettere.


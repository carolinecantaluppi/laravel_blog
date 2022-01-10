<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Public Controller
|--------------------------------------------------------------------------
| Qui nel controller è dove metto la logica applicativa.
| 
*/

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function utenti(){
        // simuliamo un data base (db) di utenti:
        $users = [
            ["name"=>"Na", "lastname"=>'Ne', 'age'=>33],
            ["name"=>"Ni", "lastname"=>'No', 'age'=>35],
            ["name"=>"Nu", "lastname"=>'Ma', 'age'=>29],
            ["name"=>"Me", "lastname"=>'Mi', 'age'=>29],
            ["name"=>"Mo", "lastname"=>"Mu<script>alert('Alerta')</script>", 'age'=>25],
            ["name"=>"Mo", "lastname"=>'Ka', 'age'=>21],
        ]; // query all db che restituisce tutti gli utenti
        
        return view('utenti',compact('users'));
        
    }

}

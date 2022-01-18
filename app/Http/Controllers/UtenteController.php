<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UtenteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // controlla se la richiesta che sta ricevendo arriva di un utente autenticato.
    }
    
    public function key($key) {    
        //dd($name);                                          dd = dumper_died. usare come check, dopo elimina.  
        // passare il parametro alla vista
        $users = [
            ["name"=>"Na", "lastname"=>'Ne', 'age'=>33],
            ["name"=>"Ni", "lastname"=>'No', 'age'=>35],
            ["name"=>"Nu", "lastname"=>'Ma', 'age'=>29],
            ["name"=>"Me", "lastname"=>'Mi', 'age'=>29],
            ["name"=>"Mo", "lastname"=>'Mu', 'age'=>25],
            ["name"=>"Mo", "lastname"=>'Ka', 'age'=>21],
        ];
    
        if ($key < 0 || $key >= count($users)) {
            abort(404);
        }
        // dd($user);
    
        $user = $users[$key];
        return view('utente', ["user"=>$user]);            // array associativo chiave->valore.
    
    }

    public function utenti(){
        // simuliamo un data base (db) di utenti:
        // $users = [
        //     ["name"=>"Na", "lastname"=>'Ne', 'age'=>33],
        //     ["name"=>"Ni", "lastname"=>'No', 'age'=>35],
        //     ["name"=>"Nu", "lastname"=>'Ma', 'age'=>29],
        //     ["name"=>"Me", "lastname"=>'Mi', 'age'=>29],
        //     ["name"=>"Mo", "lastname"=>"Mu<script>alert('Alerta')</script>", 'age'=>25],
        //     ["name"=>"Mo", "lastname"=>'Ka', 'age'=>21],
        // ]; // query all db che restituisce tutti gli utenti

        $users = User::all(); // sto dicendo all'eloquent che attraverso il modelo article, che quindi parla con tabella articles, il metodo statico all sta a significare mi prendi tutti i record che sono nella tabella articles.

        return view('utenti',compact('users'));
        
    }

}

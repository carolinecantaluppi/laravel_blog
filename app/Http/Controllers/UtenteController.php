<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtenteController extends Controller
{
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
}

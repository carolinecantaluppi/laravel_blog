<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChisiamoController extends Controller
{
    public function chiSiamo() {      
        return view('chisiamo');
    }
}

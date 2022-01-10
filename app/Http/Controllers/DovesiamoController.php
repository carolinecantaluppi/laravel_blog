<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DovesiamoController extends Controller
{
    public function doveSiamo() {      
        return view('dovesiamo');
    }
}

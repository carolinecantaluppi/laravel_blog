<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = [   // protected: vuoi dire che è accessibile all'interno della classe.
        'name',
        'email',
        'message'
    ];
}

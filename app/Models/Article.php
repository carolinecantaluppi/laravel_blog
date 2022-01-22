<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'img',
        'user_id'
    ];

    // uno a uno, un article ha un utente:
    public function user(){
        return $this->belongsTo(User::class);   // fa riferimento a (User::class).
    }   // Documentazione Laravel: Sezione Eloquent ORM -> Relationships -> Defining Relationships.
}

<?php

// CRUD: create, read, update, delete.


namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // controlla se la richiesta che sta ricevendo arriva di un utente autenticato.
    }

    public function article(){
        $articles = Article::all();
        return view('article', compact('articles'));
    }

    public function articleStore(Request $request){ // una funzione che prende i dati del form dal web.
        //dd($request->all());

        // Mass Assignment:
                                // l'oggetto Article viene costruito con questi valori perché io ho inserito in Article.php nella variabile $fillable.
        $article = Article::create([    // costruisce, creami, con il modelo article, un oggeto. All'interno di quest'oggetto, nell'attributo che si chiama 'title', inserisci il dato che abbiamo dentro dell'oggetto request e che arriva dall'input che ha come name 'title'.
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),   // all'interno del body inseriscimi il valor che arriva dall'oggetto request ma che ha come nome 'body'.
            'img'=>$request->file('img')->store('public/img'),  // detto che è un file, devo dire dove memorizarlo. Memoriza all'interno della cartela store con url public/img.
        ]);      // questa cartela public/img sta all'interno dell magazino dello storage e all'interno di app.
        
        return redirect(route("article"));
    }
}

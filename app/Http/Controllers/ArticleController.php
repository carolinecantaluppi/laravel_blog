<?php

// CRUD: create, read, update, delete.


namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function articleStore(Request $request){ // Request $request = una funzione che prende i dati del form dal web.
        //dd($request->all());

        // Mass Assignment:
                                // l'oggetto Article viene costruito con questi valori perché io ho inserito in Article.php nella variabile $fillable.
        $article = Article::create([    // costruisce, creami, con il modelo article, un oggeto. All'interno di quest'oggetto, nell'attributo che si chiama 'title', inserisci il dato che abbiamo dentro dell'oggetto request e che arriva dall'input che ha come name 'title'.
            'title'=>$request->input('title'),
            'body'=>$request->input('body'),   // all'interno del body inseriscimi il valor che arriva dall'oggetto request ma che ha come nome 'body'.
            'img'=>$request->file('img')->store('public/img'),  // detto che è un file, devo dire dove memorizarlo. Memoriza all'interno della cartela store con url public/img.
             // questa cartela public/img sta all'interno dell magazino dello storage e all'interno di app.
            'user_id'=>Auth::id(),    // = Auth::user()->id  prendi l'id dell'user. 
        ]);      
        return redirect(route("article"));
    }

    public function update(Article $article) // devo dire che l'oggetto che sta arrivando, che se chiama article, è un oggetto che appartiene alla classe Article.
    {
        // dd($article);
        return view('article.update', compact('article'));
    }

    public function edit(Article $article, Request $request){    // $request = qui dentro questo è un oggetto che mi serve per catturare i dati nuovi che abbiamo modificato all'interno dell'input.
    
        // dd($article, $request->all());  // ricordare di mettere soltanto $request->all, così si vedi solo i dati e non tutti l'oggetto.
    
        if ($article->user->id === Auth::id()) {
            
            if ($request->file('img')) {
                
                $article->update([
                    'title'=>$request->input('title'),  // nell'attributo title inseriscimi i dati che ho dentro dell'oggetto $request che arriva dall'input che si chiama title.
                    'body'=>$request->input('body'),
                    'img'=>$request->file('img')->store('public/img'),
                ]);
            } else {
                $article->update([
                    'title'=>$request->input('title'),  // nell'attributo title inseriscimi i dati che ho dentro dell'oggetto $request che arriva dall'input che si chiama title.
                    'body'=>$request->input('body'),
                ]);
            }
        }
        
        return redirect(route('article'));
    }

    public function destroy(Article $article){
        // dd($article);

        if ($article->user->id === Auth::id()) {

            // * per elliminare questi dati dall database: *
            $article->delete();
        }
        
        return redirect(route('article'));
    }
}

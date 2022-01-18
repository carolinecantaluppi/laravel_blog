<x-layout>
    <x-slot name="title">Article</x-slot>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <h1>I miei articoli</h1>
            </div>
        </div>

        
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data"> <!-- per inviare l'immagine (enctype="multipart/form-data") -->
                    @csrf       {{-- è un token di protezione per sapere a chi fa riferimento (la richiesta). --}}
                    <div class="mb-3 mt-5">
                        <label for="exampleInputEmail1" class="form-label">Inserisci il titolo dell'articolo</label>
                        <input type="text" class="form-control" name="title">  <!-- name="email" : dando dei nome all'input per sapere come uttilizzare, come gestire.-->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Inserisci un'immagine</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Descrizione dell'articolo</label>
                        <textarea name="body" class="form-control" rows="3"></textarea>
                    </div>
                    <div class=" mt-5 mx-auto">
                        <button type="submit" class="btn btn-primary">Invia Articolo</button>
                    </div>
                </form>
            </div>
        </div>
       
        
        <div class="row mt-5">
            @forelse($articles as $article)
            <div class="col-12 col-md-4 ">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">     <!-- collegare l'immagine dello storage con la cartella public usando il commando nell terminale: php artisan storage:link. -->
                    <div class="card-body">
                        <h5 class="card-title">{{$article['title']}}</h5>  <!-- fa un echo di htmlspecialchar($variabilechevogliostampare). -->
                        <p class="card-text">{{$article['body']}}
                            @if ($loop->first)
                            This is the first iteration.
                            @endif
                            @if($loop->last)
                            This is the last iteration.
                            @endif
                        </p>
                        <a href="{{route('utente', ['key'=>$loop->index])}}" class="btn btn-primary">Vai al dettaglio</a>
                    </div>
                </div>
            </div>  
            @empty
            <h2>Non ci sono articoli.</h2>
            @endforelse
        </div>
    </div>

</x-layout>
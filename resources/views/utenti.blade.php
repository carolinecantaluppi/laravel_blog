<x-layout>
    <x-slot name="title">Dettaglio</x-slot>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <h1>Utenti nel dettaglio</h1>
            </div>
        </div>

        
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data"> <!-- per inviare l'immagine (enctype="multipart/form-data") -->
                    @csrf       {{-- è un token di protezione per sapere a chi fa riferimento (la richiesta). --}}
                    <div class="mb-3 mt-5">
                        <label for="exampleInputEmail1" class="form-label">Inserisci il nome e cognome dell nuovo utente</label>
                        <input type="text" class="form-control" name="title">  <!-- name="email" : dando dei nome all'input per sapere come uttilizzare, come gestire.-->
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Inserisci un'immagine</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Descrizione dell'utente</label>
                        <textarea name="body" class="form-control" rows="3"></textarea>
                    </div>
                    <div class=" mt-5">
                        <button type="submit" class="btn btn-primary col-4 mx-auto">Invia</button>
                    </div>
                </form>
            </div>
        </div>
       
        
        <div class="row mt-5">
            @forelse($users as $user)
            <div class="col-12 col-md-4 ">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/300?bo={{$loop->index}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$user['name']}} {!!$user['lastname']!!}</h5>  <!-- fa un echo di htmlspecialchar($variabilechevogliostampare). -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                            @if ($loop->first)
                            This is the first iteration.
                            @endif
                            @if($loop->last)
                            This is the last iteration.
                            @endif
                        </p>
                        <a href="{{route('utente', ['key'=>$loop->index])}}" class="btn btn-primary col-8 mx-auto">Dettaglio</a>
                    </div>
                </div>
            </div>  
            @empty
            <h2>Non ci sono utenti.</h2>
            @endforelse
        </div>
    </div>

</x-layout>
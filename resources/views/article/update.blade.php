<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mt-5 offset-md-3 text-center">
                <h1>Modifica un Articolo</h1>
            </div>
        </div>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <form method="POST" action="{{route("article.edit", compact('article'))}}">    {{-- PUT : per modificare un'intera risorsa. --}}
                            @csrf       {{-- è un token di protezione per sapere a chi fa riferimento (la richiesta). --}}
                            @method('put')
                            <div class="mb-3 mt-5">
                                <label for="exampleInputEmail1" class="form-label">Titolo</label>
                                <input type="text" class="form-control" name="title" value="{{$article->title}}">  {{-- name="email" : dando dei nome all'input per sapere come uttilizzare, come gestire.--}}
                            </div>
                            <div class="mb-3">
                                <img src="{{Storage::url($article->img)}}" alt="" width="80" height="80">  {{-- inserisco il link Storage::url e dico per inserire l'immagine dell'articolo che ho cliccato per modificare. --}}
                                <label for="exampleInputText" class="form-label">Immagine</label>
                                <input type="file" class="form-control" name="img">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputText" class="form-label">Descrizione</label>
                                <textarea name="body" class="form-control" rows="3">{{$article->body}}</textarea> {{-- con article->body dico che nella text area devo inserire il body dell'articolo che ho selezionato per poter modificarlo. --}}
                            </div>
                            <div class=" mt-5 col-4 mx-auto">
                                <button type="submit" class="btn btn-primary">Modifica Articolo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</x-layout>
<x-layout>

    <div class=" mt-5 justify-content-center text-center">
        <h1>Contattaci</h1>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route("submit")}}">
                    @csrf       {{-- è un token di protezione per sapere a chi fa riferimento (la richiesta). --}}
                    <div class="mb-3 mt-5">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">  {{-- (name="email")dando dei nome all'input per sapere come uttilizzare, come gestire. --}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Nome e Cognome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Messaggio</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class=" mt-5 mx-auto">
                        <button type="submit" class="btn btn-primary">Contattaci</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
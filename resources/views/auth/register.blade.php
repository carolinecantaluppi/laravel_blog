<x-layout title="Registrati">

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <h1>Registrati</h1>
            </div>
        </div>

        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif  
        </div>
    
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route("register")}}">
                    @csrf       {{-- è un token di protezione per sapere a chi fa riferimento (la richiesta). --}}
                    <div class="mb-3 mt-5">
                        <label for="exampleInputEmail1" class="form-label">Nome utente</label>
                        <input type="text" class="form-control" name="name">  {{-- (name="email")dando dei nome all'input per sapere come uttilizzare, come gestire. --}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email utente</label>
                        <input type="email" class="form-control" name="email">  {{-- (name="email")dando dei nome all'input per sapere come uttilizzare, come gestire. --}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class=" mt-5 mx-auto">
                        <button type="submit" class="btn btn-primary">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
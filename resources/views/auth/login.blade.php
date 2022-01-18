<x-layout title="Login">

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <h1>Login</h1>
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
                <form method="POST" action="{{route("login")}}">     {{--  method sempre POST, perché stiamo inviando dati. --}}
                    @csrf       {{-- è un token di protezione per sapere a chi fa riferimento (la richiesta). --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email utente</label>
                        <input type="email" class="form-control" name="email">  {{-- (name="email")dando dei nome all'input per sapere come uttilizzare, come gestire. --}}
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Password utente</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class=" mt-5 mx-auto">
                        <button type="submit" class="btn btn-primary">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
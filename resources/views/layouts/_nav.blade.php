
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('chi-siamo')}}">Chi siamo</a>     <!-- invece di usare href="/chi-siamo", nel file blade se usa 2 parenseti graffe per aprire una parentesi interdimensionale nel spazio tempo, e dentro acceddo al laravel php. -->
                    </li>                       <!-- passo il nome della route e lui mi restituisce la URI di quella rotta. -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dove-siamo')}}">Dove siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('utenti')}}">Utenti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

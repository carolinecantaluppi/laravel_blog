<!-- così ho encapsulato tutto il mio body all'interno di questo tag che fa riferimento a layout.blade.php -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('chi-siamo')}}">Chi siamo</a>     <!-- invece di usare href="/chi-siamo", nel file blade se usa 2 parenseti graffe per aprire una parentesi interdimensionale nel spazio tempo, e dentro acceddo al laravel php. -->
                </li>                       <!-- passo il nome della route e lui mi restituisce la URI di quella rotta. -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dove-siamo')}}">Dove siamo</a>
                </li>
                @auth           {{-- utente autenticato (se l'utente è autenticato, mostrami questo: ) --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article')}}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('utenti')}}">Utenti</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Inserisci Articoli</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault()
                                document.getElementById('logout').submit()">Logout</a>
                            </li>
                            <form method="POST" action="{{route('logout')}}" id="logout">
                                @csrf
                            </form>
                        </ul>
                    </li>    
                </ul>
                @else       {{-- altrimenti, mostrami questo:--}}
                {{-- @guest  <!-- se un utente è ospite, mostrami questo link, se non è non mostra. -->    --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contattaci</a>
                </li>
                @endauth
                {{-- @endguest --}}
            </div>
        </div>
    </nav>
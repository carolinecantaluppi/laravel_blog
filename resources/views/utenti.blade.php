<x-layout>
    <x-slot name="title">Dettaglio</x-slot>

    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1>Utenti nel dettaglio</h1>
        </div>
    </div>
    
    <div class="row mt-5 justify-content-center">
        @forelse($users as $user)
        <div class="col-md-4">
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
                    <a href="{{route('utente', ['key'=>$loop->index])}}" class="btn btn-primary">Vai al dettaglio</a>
                </div>
            </div>
        </div>  
        @empty
            <h2>Non ci sono utenti.</h2>
        @endforelse
    </div>
</x-layout>
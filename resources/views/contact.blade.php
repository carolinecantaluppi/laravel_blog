<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 justify-content-center text-center">
                <h1>Contattaci</h1>
                <form method="POST" action="{{route("submit")}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Nome e Cognome</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Messaggio</label>
                        <textarea name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Contattaci</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
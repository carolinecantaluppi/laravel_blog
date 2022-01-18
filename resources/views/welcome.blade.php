<x-layout>

    <x-slot name="title">Homepage</x-slot>
    
    <div class="row mt-5">              <!--  significa:  -->
        @if (session('message'))         <!-- se in sezzione ti arriva un messaggio -->
            <div class="alert alert-success text-center">        <!-- passami un div verde di alerta -->
                {{ session('message') }}         <!-- con questo messaggio. -->
            </div>
        @endif
    </div>
    
    <div class="row mt-5">
        <div class="leftcolumn">
            <div class="card">
                <h2>TITOLO</h2>
                <h5>Descrizione del titolo, 5 gennaio 2022</h5>
                <div class="fakeimg" style="height:200px;">Imagine</div>
                <p>testo..</p>
            </div>
            <div class="card">
                <h2>TITOLO</h2>
                <h5>Descrizione del titolo, 3 gennaio 2022</h5>
                <div class="fakeimg" style="height:200px;">Imagine</div>
                <p>testo..</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>Su di me</h2>
                <div class="fakeimg" style="height:100px;">Imagine</div>
                <p>Testo Su di me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
                <h3>Post Populari</h3>
                <div class="fakeimg">Imagine</div><br>
                <div class="fakeimg">Imagine</div><br>
                <div class="fakeimg">Imagine</div>
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <p>testo..</p>
            </div>
        </div>
    </div>
</x-layout>
    
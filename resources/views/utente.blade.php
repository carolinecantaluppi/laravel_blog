<x-layout>
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1>Ciao {{$user['name']}} {{$user['lastname']}}</h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="leftcolumn">
            <div class="card">
                <h2>Su di me</h2>
                <div class="fakeimg" style="height:300px;">Imagine</div>
                <p>testo su di me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <p>testo..</p>
            </div>
        </div>
        <div class="card rightcolumn">
            <h3>Post più Populari</h3>
            <div class="fakeimg" style="height:150px;">Imagine</div><br>
            <div class="fakeimg" style="height:150px;">Imagine</div><br>
            <div class="fakeimg" style="height:150px;">Imagine</div>
        </div>
    </div>    
</x-layout>
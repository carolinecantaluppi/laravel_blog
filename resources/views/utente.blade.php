<x-layout>
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1>Ciao {{$user['name']}} {{$user['lastname']}}</h1>
        </div>
    </div>

    <div class="row mt-5">
        <div class="card leftcolumn">
            <div class="card-body">
                <h2>Su di me</h2>
                <img src="https://picsum.photos/850" alt="...">
                <p>testo su di me in culpa qui officia deserunt mollit anim..</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h3>Post più Populari</h3>
                <div class="fakeimg" style="height:150px;">
                <img src="https://picsum.photos/200" alt="...">
                </div><br>
                <div class="fakeimg" style="height:150px;">
                <img src="https://picsum.photos/200" alt="...">
                </div><br>
                <div class="fakeimg" style="height:150px;">
                <img src="https://picsum.photos/200" alt="...">
                </div>
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <p>testo..</p>
            </div>
        </div>
    </div>    
</x-layout>
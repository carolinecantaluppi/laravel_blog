@extends('layouts.app')
@section('abbraccio')
    <div class="row mt-5">
        <div class="col-12">
            <h1>Ciao {{$name}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Su di me</h2>
                <div class="fakeimg" style="height:100px;">Imagine</div>
                <p>testo su di me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
                <h3>Post più Populari</h3>
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
@endsection
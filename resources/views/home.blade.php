@extends('template.master')
@section('title', 'home')
@section('content')

@include('template.navbar')
<div class="container">
    <h1 class="text-center" style="font-family: consolas">Find Your Best Clothes Here!</h1>
    <div class="row row-cols-3 justify-content-md-center">

        <div class="card">
            <img src="..." class="card-img-top" alt="...">

            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>

</div>
@endsection

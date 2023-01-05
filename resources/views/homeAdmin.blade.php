@extends('template.master')
@section('title', 'Home')
@section('content')
    @include('template.navbar-admin')
    @foreach ($products as $p)
        <div class="container">
            <h1 class="text-center" style="font-family: consolas">Find Your Best Clothes Here!</h1>
            <div class="row row-cols-3 justify-content-md-center">

                <div class="card-image">
                    <img src="storage/images/{{ $p->image }}" alt="...">

                    <div class="card-body">
                        <h5 class="card-title">{{ $p->product_name }}</h5>
                        <p class="card-text">{{ $p->description }}</p>
                        <button class="card-inner-button" onclick="">More Detail</button>
                    </div>
                </div>
            </div>

        </div>
    @endsection

@extends('template.master')
@section('title', 'Home')
@section('content')
    @include('template.navbar-admin')
    <div class="container">

        <h1 class="text-center" style="font-family: consolas">Find Your Best Clothes Here!</h1>
        <div class="row row-cols-3 justify-content-md-center">
            @foreach ($data as $dataProduct)
                <div class="card col m-1" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ $dataProduct->image }}"class="card-img-top" alt="...">
                        <h5 class="card-title">{{ $dataProduct->name }}</h5>
                        <p class="card-text">{{ $dataProduct->price }}</p>
                        <button class="btn card-inner-button btn-primary" onclick=""><a href="#"></a>More
                            Detail</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-center" style="margin: 2rem">
        {{-- TODO: Show pagination link here --}}
    </div>
@endsection

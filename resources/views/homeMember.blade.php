@extends('template.master')
@section('title', 'Home')
@section('content')
    @include('template.navbar-members')
    <h1 class="text-center" style="font-family: consolas">Find Your Best Clothes Here!</h1>

    @foreach ($data as $dataProduct)
        <div class="container">
            <div class="row row-cols-6">
                <div class="card-deck">
                    <div class="card-deck" style="width: 18rem;">
                        <img src="{{ $dataProduct->image }}"class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">{{ $dataProduct->name }}</h5>
                            <p class="card-text">{{ $dataProduct->price }}</p>
                            <button class="btn card-inner-button btn-primary" onclick=""><a href="#"></a>More
                                Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

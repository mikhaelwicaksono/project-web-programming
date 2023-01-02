@extends('template.master')
@include('template.navbar-members')
@section('title', 'Detail Product')
@section('content')
    <div class="card mb-3 position-relative" style="max-width: 540px; display: flex;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="jacket-1.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body-center">
                    <h5 class="card-title">Purple Jacket</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
@endsection

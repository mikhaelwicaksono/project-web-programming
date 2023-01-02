@extends('template.master')
@include('template.navbar-members')
@section('title', 'My Cart')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <div class="title text-center"
                    style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                    <h2>
                        My Cart
                    </h2>
                    <div class="text-end">
                        <h5>Total Price : <a class="btn btn-primary" href="{{ route('Check Out') }}">Check Out</a></h5>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

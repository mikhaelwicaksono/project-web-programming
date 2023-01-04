@extends('template.master')
@section('title', 'Sign In')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mt-3">
                    <div class="card-body" style="background-color: #fddedf">
                        <form method="POST" action="{{ route('Sign In For User') }}">
                            @csrf
                            <div class="title text-center mb-4">
                                <h1>Sign In</h1>
                            </div>
                            <div class="mb-3 col-sm-14">
                                <label for="inputEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                                    value="{{ Cookie::get('last_logged') ? Cookie::get('last_logged') : '' }}" />
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3 col-sm-14">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword"
                                    placeholder="5-20 characters">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="Check">
                                <label class="form-check-label" for="Check">Remember me</label>
                            </div>
                            @if (session()->has('success'))
                                <div class="alert alert-success form-outline mb-4" role="alert">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger form-outline mb-4" role="alert">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                            <button type="submit" class="btn col-12 mb-3"
                                style="background-color: #b5838d; color: white">Sign in</button>
                            <div id="button" class="form-text text-center" style="height: 250px;">Not Register yet? <a
                                    href="{{ route('Sign Up Page') }}">Register here</a></div>
                        </form>
                    @endsection

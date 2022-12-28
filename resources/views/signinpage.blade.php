@extends('template.master')
@section('title', 'Sign In')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mt-3">
                    <div class="card-body" style="background-color: #fddedf">
    <form>
        <div class="title text-center mb-4">
            <h1>Sign In</h1>
        </div>
        <div class="mb-3 col-sm-14">
          <label for="inputEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3 col-sm-14">
          <label for="inputPassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword" placeholder="5-20 characters">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="Check">
          <label class="form-check-label" for="Check">Remember me</label>
        </div>
        <button type="submit" class="btn col-12 mb-3" style="background-color: #b5838d; color: white">Sign in</button>
        <div id="button" class="form-text text-center" style="height: 250px;">Not Register yet? <a href="{{ route('Sign Up Page') }}">Register here</a></div>
      </form>
@endsection

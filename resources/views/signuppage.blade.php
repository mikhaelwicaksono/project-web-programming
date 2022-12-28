@extends('template.master')
@section('title', 'Sign Up')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mt-3">
                    <div class="card-body" style="background-color: #fddedf">
                        <form>
        <div class="title text-center mb-4">
            <h1>Sign Up</h1>
        </div>
        <div class="mb-3 col-sm-14">
            <label for="inputUsername" class="form-label">Username</label>
            <input type="username" class="form-control" id="inputUsername" placeholder="(5-20 letters)">
            </div>
        <div class="mb-3 col-sm-14">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3 col-sm-14">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="(5-20 letters)">
        </div>
        <div class="mb-3 col-sm-14">
            <label for="inputPhoneNum" class="form-label">Phone Number</label>
            <input type="phonenum" class="form-control" id="inputPhoneNum" placeholder="(10-13 numbers)">
        </div>
        <div class="mb-3 col-sm-14">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="address" class="form-control" id="inputAddress" placeholder="(min 5 letters)">
        </div>

        <button type="submit" class="btn col-12 mb-3" style="background-color: #b5838d; color: white">Submit</button>
        <div id="button" class="form-text text-center mb-4">Already Registered? <a href="{{ route('Sign In Page') }}">Sign in here</a></div>

      </form>
    </div>
</div>
</div>
</div>
</div>
@endsection

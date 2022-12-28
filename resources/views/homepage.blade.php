@extends('template.master')
@section('title', 'Welcome To Maiboutique')
@section('content')
<section>
<style>
    .body {
        margin: 0px;
        padding: 0px;
    }
    ul {
        list-style: none;
    }
    .nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
        margin-left: 90px;
        margin-right: 90px;
    }
    .nav ul li a{
        margin:30px;
        font-family:myriad pro regular;
        color:#1874FD;
        font-size: 18px;
        font-weight:700;
    }
    .logo{
        font-family: Arial, Helvetica, sans-serif;
        color: #1874FD;
        font-weight:bold;
        font-size: 30px
    }
    .content{
        background-image: url("clothes.png");

        background-size: cover;

        background-attachment: fixed;
        height: 600px;
        margin-top: 60px;
    }
    .content-text{
        text-align: center;
        margin-top: 200px;
        margin-left: 500px;
        position: absolute;
    }

    .sign-up{
        width: 500px;
        padding: 25px;
        box-sizing: border-box;
        border-radius: 10px;
        text-align: center;
        background-color: #3498db;
        color: white;
        font-size: 15px;
    }
</style>
<body>
    <div class="nav">
        <a href="#" class="logo">MAIBOUTIQUE</a>

        <ul>
            <li>
                <a href="{{ route('Sign In Page') }}">Sign In</a>
            </li>
        </ul>

    </div>
    <div class="content">
        <div class="content-text">
            <h1 style="font-size: 50px;color: white; font-family: Georgia, 'Times New Roman', Times, serif">Welcome to MaiBoutique</h1>
            <h2 style="font-size: 25px; color: white; margin-bottom: 50px">Online Boutique that Provides You with Various Clothes to Suit Your Various Activities</h2>
            <h3><a href="{{ route('Sign Up Page') }}" class="sign-up">SIGN UP NOW</a></h3>
        </div>
    </div>
</section>
@endsection

@extends('layouts.master')


@section('container')

    <section class="hero">
        <button class="hero-button">Log In</button>
        @include('partials.popup')
    </section>
    <div class="container">
        <h2 class="heading">Search for Cities</h2>
        <form action="" class="search">
            <input type="search">
            <button type="submit">Search</button>
        </form>
        <h2 class="heading">Discover</h2>
        <div class="post_tn">
            <a href="{{ route('showuser') }}">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/img/mann.jpeg" alt="Profilbild">
                    <h3 class="uname_tn">Max Musterman</h3>
                </div>
            </a>
            <a href="{{ route('showstory') }}">
                    <h4 class="post_tn_heading">One night in Paris</h4>
                    <img src="/img/eifelturm.jpeg" alt="" class="post_tn_img">
                    <p class="post_tn_txt">Lemon drops macaroon croissant pastrymarzipan icing cupcake.Cake marzipan cookie danish halvah.</p>
            </a>
        </div>
        <div class="post_tn">
            <a href="{{ route('showuser') }}">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/img/mann.jpeg" alt="Profilbild">
                    <h3 class="uname_tn">Max Musterman</h3>
                </div>
            </a>
            <a href="{{ route('showstory') }}">
                <h4 class="post_tn_heading">One night in Paris</h4>
                <img src="/img/eifelturm.jpeg" alt="" class="post_tn_img">
                <p class="post_tn_txt">Lemon drops macaroon croissant pastrymarzipan icing cupcake.Cake marzipan cookie danish halvah.</p>
            </a>
        </div>

    </div>

@endsection
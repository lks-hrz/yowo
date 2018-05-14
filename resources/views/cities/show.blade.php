@extends('layouts.master')


@section('container')

    <div class="container">
        <div class="content_cnt">
            <h2 class="city_heading">Paris</h2>
            <div class="city_questions">

            </div>
            <h3 class="heading">Stories</h3>
        </div>
        <div class="post_tn">
            <div class="user_tn">
                <img class="profilepic_tn" src="/img/mann.jpeg" alt="Profilbild">
                <h3 class="uname_tn">Max Musterman</h3>
            </div>
            <a href="{{ route('show') }}">
                <h4 class="post_tn_heading">One night in Paris</h4>
                <img src="/img/eifelturm.jpeg" alt="" class="post_tn_img">
                <p class="post_tn_txt">Lemon drops macaroon croissant pastrymarzipan icing cupcake.Cake marzipan cookie danish halvah.</p>
            </a>
        </div>
    </div>

@stop

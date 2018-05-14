@extends('layouts.master')


@section('container')


    <div class="container">
        <div class="content_cnt">
            <div class="user_cnt">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/img/mann.jpeg" alt="Profilbild">
                    <h2 class="uname_tn">Max Musterman</h2>
                </div>
            </div>
            <h3 class="heading">Your Stories</h3>
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
    </div>
@stop
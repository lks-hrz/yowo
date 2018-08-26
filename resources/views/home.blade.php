@extends('layouts.master')

@section('title', 'Home')


@section('container')

    <section class="hero">
        @if( auth()->check())
            <button class="hero-button hero-add">Add</button>
        @else

        <button class="hero-button hero-log">Log In</button>


        @endif

    </section>
    <main class="container" id="home_container">
        <h2 class="heading">Search for Cities</h2>
        <form method="post"  action="{{ route("showCity") }}" class="search">
            {{ csrf_field() }}

            <input type="search" name="city">
            <button type="submit"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve" width="20px" height="20px">
<path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
	c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
	C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
	S32.459,40,21.983,40z"/></svg></button>
        </form>
        <h2 class="heading">Discover</h2>
        <div class="story_cnt">
            @foreach($stories as $key => $value)

                <div class="post_tn">
                    <a href="{{ route('showuser', $value->user_id) }}">
                        <div class="user_tn">
                            <img class="profilepic_tn" src="/storage/avatars/{{ $value->user->avatar }}" alt="Profilbild">
                            <h3 class="uname_tn">{{ $value->user->name }}</h3>
                        </div>
                    </a>
                    <a href="{{ route('showstory', $value->id) }}">
                        <h4 class="post_tn_heading">{{  $value->title }}</h4>
                        <img src="/storage/stories/{{ $value->title_img }}" alt="" class="post_tn_img">
                        <p class="like_count">{{ $value->likes }} Likes</p>

                        <div class="post_tn_txt">
                            <p class="">{!! $value->description !!}</p>
                        </div>
                        <input type="hidden" class="story_id" value="{{ $value->id }}">
                    </a>
                </div>

            @endforeach
        </div>


        {{--<div class="post_tn">
            <a href="{{ route('showuser') }}">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/img/mann.jpg" alt="Profilbild">
                    <h3 class="uname_tn">Max Musterman</h3>
                </div>
            </a>
            <a href="{{ route('showstory', 2) }}">
                    <h4 class="post_tn_heading">One night in Paris</h4>
                    <img src="/img/eifelturm.jpeg" alt="" class="post_tn_img">
                    <p class="post_tn_txt">Lemon drops macaroon croissant pastrymarzipan icing cupcake.Cake marzipan cookie danish halvah.</p>
            </a>
        </div>
        <div class="post_tn">
            <a href="{{ route('showuser') }}">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/img/mann.jpg" alt="Profilbild">
                    <h3 class="uname_tn">Max Musterman</h3>
                </div>
            </a>
            <a href="{{ route('showstory', 2) }}">
                <h4 class="post_tn_heading">One night in Paris</h4>
                <img src="/img/eifelturm.jpeg" alt="" class="post_tn_img">
                <p class="post_tn_txt">Lemon drops macaroon croissant pastrymarzipan icing cupcake.Cake marzipan cookie danish halvah.</p>
            </a>
        </div>--}}

    </main>

@endsection
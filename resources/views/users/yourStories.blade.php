@extends('layouts.master')

@section('title', 'Your Stories')


@section('container')

    <main class="container">
        <div class="content_cnt">


            <div class="user_cnt">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/storage/avatars/{{ auth()->user()->avatar }}" alt="Profilbild">
                    <h2 class="uname_tn">{{ auth()->user()->name }}</h2>
                </div>
            </div>
            <h3 class="heading">Your Stories</h3>

    @foreach($stories as $key => $value)



        <div class="post_tn">
            <a href="{{ route('showuser', $value->user_id) }}">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/storage/avatars/{{ $value->user->avatar }}" alt="Profilbild">
                    <h3 class="uname_tn">{{ $value->user->name }}</h3>
                </div>
                @if($value->private == "private")
                    <span class="lock_svg">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 54 54" style="enable-background:new 0 0 54 54;" xml:space="preserve" width="20px" height="20px">

	<path d="M43,20.113V14.5C43,6.505,35.822,0,27,0S11,6.505,11,14.5v5.613c-3.401,0.586-6,3.55-6,7.117v19.542
		C5,50.757,8.243,54,12.229,54h29.542C45.757,54,49,50.757,49,46.771V27.229C49,23.663,46.401,20.699,43,20.113z M13,14.5
		C13,7.607,19.28,2,27,2s14,5.607,14,12.5V20H13V14.5z M47,46.771C47,49.654,44.654,52,41.771,52H12.229C9.346,52,7,49.654,7,46.771
		V27.229C7,24.346,9.346,22,12.229,22h29.542C44.654,22,47,24.346,47,27.229V46.771z"/>
                        <path d="M27,28c-2.206,0-4,1.794-4,4v6c0,2.206,1.794,4,4,4s4-1.794,4-4v-6C31,29.794,29.206,28,27,28z M29,38c0,1.103-0.897,2-2,2
		s-2-0.897-2-2v-6c0-1.103,0.897-2,2-2s2,0.897,2,2V38z"/></svg>
                    </span>
                @endif
            </a>
            <a href="{{ route('showstory', $value->id) }}">
                <h4 class="post_tn_heading">{{  $value->title }}</h4>
                <img src="/storage/stories/{{ $value->title_img }}" alt="" class="post_tn_img">
                <div class="post_tn_txt">
                    <p class="">{!! $value->description !!}</p>
                </div>
            </a>
            {{--<form method="get" action="{{ route('showuser', $value->id) }}">
                {{ csrf_field() }}
                <button type="submit" value="">Edit Story</button>
            </form>--}}


            <a onclick="return confirm('Do you really wanto to delete this story?')" href="{{ route('deleteStory', $value->id) }}">
                <button type="submit" class="delete_story">Delete Story</button>
            </a>


            {{--<div class="delete_confirm">
                <a href="#" class="close">
                    <span></span>
                    <span></span>
                </a>
                <h2>YOWO</h2>
                <p>Do you really want to delete this story?</p>
                <a href="{{ route('deleteStory', $value->id) }}">
                    <button type="submit" class="dark_button delete_btn">YES</button>
                </a>
            </div>--}}

        </div>

    @endforeach

        </div>
    </main>


    {{--<div class="container">
        <div class="content_cnt">
            <div class="user_cnt">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/img/mann.jpg" alt="Profilbild">
                    <h2 class="uname_tn">Max Musterman</h2>
                </div>
            </div>
            <h3 class="heading">Your Stories</h3>
            <div class="post_tn">
                <a href="{{ route('showuser') }}">
                    <div class="user_tn">
                        <img class="profilepic_tn" src="/img/mann.jpg" alt="Profilbild">
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
                        <img class="profilepic_tn" src="/img/mann.jpg" alt="Profilbild">
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
    </div>--}}
@stop
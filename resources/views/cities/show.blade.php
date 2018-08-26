@extends('layouts.master')
@section('title', $stories[0]->city)


@section('container')

    <main class="container">
        <div class="content_cnt">
            <h2 class="city_heading">{{ $stories[0]->city }}</h2>

            <h3 class="heading">Stories</h3>
        </div>
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
                    <div class="post_tn_txt">
                        <p class="">{!! $value->description !!}</p>
                    </div>
                </a>
                <p class="like_count">{{ $value->likes }} Likes</p>
            </div>

        @endforeach
    </main>

@stop

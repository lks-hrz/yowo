@extends('layouts.master')
@section('title', 'Admin')


@section('container')

    <main class="container">
        <div class="content_cnt">
            <h2>Fallged Strories</h2>
            @foreach($stories as $key => $value)

                <div class="post_tn">
                    <a href="{{ route('showuser', $value->user_id) }}">
                        <div class="user_tn">
                            <img class="profilepic_tn" src="/storage/avatars/{{ $value->user->avatar }}" alt="Profilbild">
                            <h3 class="uname_tn">{{ $value->user->name }}</h3>
                        </div>
                    </a>
                    <a href="{{ route('showstory', $value->id) }}" target="_blank">
                        <h4 class="post_tn_heading">{{  $value->title }}</h4>
                        <img src="/storage/stories/{{ $value->title_img }}" alt="" class="post_tn_img">
                        <div class="post_tn_txt">
                            <p class="">{!! $value->description !!}</p>
                        </div>
                        <input type="hidden" class="story_id" value="{{ $value->id }}">

                    </a>
                    <button class="delete_btn">DELETE STORY!</button>
                    <button class="reset_btn">STORY IS FINE</button>
                </div>

            @endforeach
        </div>

    </main>

    @stop

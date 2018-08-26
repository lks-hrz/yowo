@extends('layouts.master')

@section('title', $user[0]->name)


@section('container')

    @foreach($map as $code)
        {{--
                {{dd($flightCodes)}}
        --}}

        <input type="hidden" class="departurelat" value="{{$code["departure"][0]["lat"]}}"/>
        <input type="hidden" class="departurelon" value="{{$code["departure"][0]["lon"]}}"/>

        <input type="hidden" class="arrivallat" value="{{$code["arrival"][0]["lat"]}}"/>
        <input type="hidden" class="arrivallon" value="{{$code["arrival"][0]["lon"]}}"/>


    @endforeach

    <main class="container">
        <div class="content_cnt">
            <div class="user_cnt">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/storage/avatars/{{ $user[0]->avatar }}" alt="Profilbild">
                    <h2 class="uname_tn">{{ $user[0]->name }}</h2>
                </div>
            </div>
           <div id="map"></div>
            <h3 class="heading">Stats</h3>
            <div class="stats_tn">
                <div class="answer_pair">
                    <p>Time</p>
                    <p>{{ convertToHours($stats) }} hours</p>
                </div>
                <div class="answer_pair">
                    <p>Flights</p>
                    <p>{{ count($map) }}</p>
                </div>
            </div>
            <h3 class="heading">Stories</h3>
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
                        <input type="hidden" class="story_id" value="{{ $value->id }}">

                    </a>
                    <p class="like_count">{{ $value->likes }} Likes</p>

                </div>

            @endforeach
        </div>

    </main>



@stop
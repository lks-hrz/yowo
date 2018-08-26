@extends('layouts.master')

@section('title', 'Your World')


@section('container')
    @foreach($flightCodes as $code)
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
                    <img class="profilepic_tn" src="/storage/avatars/{{ auth()->user()->avatar }}" alt="Profilbild">
                    <h2 class="uname_tn">{{ auth()->user()->name }}</h2>
                </div>
            </div>
            <h3 class="heading">Your World</h3>
            <div id="map"></div>
        </div>
        <div class="flights">
            <h3 class="heading">Flights</h3>

                @foreach($flightCodes as $code)
                    <div class="flight-pair">
                        <p>{{ $code["departure_code"] }} - {{ $code["arrival_code"] }}</p>

                        <p>{{ date('d.m.Y', strtotime($code["date"])) }}</p>
                    </div>


                    @endforeach
        </div>
    </main>
@stop
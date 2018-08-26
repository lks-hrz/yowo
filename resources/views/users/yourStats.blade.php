@extends('layouts.master')

@section('title', 'Your Stats')


@section('container')


    <main class="container">
        <div class="content_cnt">
            <div class="user_cnt">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/storage/avatars/{{ auth()->user()->avatar }}" alt="Profilbild">
                    <h2 class="uname_tn">{{ auth()->user()->name }}</h2>
                </div>
            </div>
            <h3 class="heading">Your Stats</h3>
            <div class="stats">
                <h4>Time in Air</h4>
                <div class="stats__pair">
                    <p>Hours</p>
                    <p>{{ convertToHours($total_duration) }}</p>
                </div>
                <div class="stats__pair">
                    <p>Days</p>
                    <p>{{ convertToDays($total_duration) }}</p>
                </div>
                <div class="stats__pair">
                    <p>Weeks</p>
                    <p>{{ convertToWeeks($total_duration) }}</p>
                </div>
                <div class="stats__pair">
                    <p>Months</p>
                    <p>{{ convertToMonths($total_duration) }}</p>
                </div>
                <div class="stats__pair">
                    <p>Years</p>
                    <p>{{ convertToYears($total_duration) }}</p>
                </div>
            </div>
        </div>
    </main>
@stop
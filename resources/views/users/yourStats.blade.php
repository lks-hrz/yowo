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
            <h3 class="heading">Your Stats</h3>
            <div class="stats">
                <h4>Distance</h4>
                <div class="stats__pair">
                    <p>Kilometers</p>
                    <p>282729</p>
                </div>
                <div class="stats__pair">
                    <p>Miles</p>
                    <p>175.680</p>
                </div>
                <div class="stats__pair">
                    <p>Around the World</p>
                    <p>7.05</p>
                </div>
                <div class="stats__pair">
                    <p>To the moon</p>
                    <p>0.735</p>
                </div>
                <div class="stats__pair">
                    <p>To the sun</p>
                    <p>0.0019</p>
                </div>
            </div>
            <div class="stats">
                <h4>Time in Air</h4>
                <div class="stats__pair">
                    <p>Hours</p>
                    <p>361</p>
                </div>
                <div class="stats__pair">
                    <p>Days</p>
                    <p>15</p>
                </div>
                <div class="stats__pair">
                    <p>Weeks</p>
                    <p>2.1</p>
                </div>
                <div class="stats__pair">
                    <p>Months</p>
                    <p>0.5</p>
                </div>
                <div class="stats__pair">
                    <p>Years</p>
                    <p>0.041</p>
                </div>
            </div>
        </div>
    </div>
@stop
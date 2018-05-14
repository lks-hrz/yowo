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
            <h3 class="heading">Settings</h3>
            <div class="settings_tn">
                <div class="settings_tn__pair">
                    <p>Name</p>
                    <p>Max Musterman</p>
                    <span></span>
                </div>
                <div class="settings_tn__pair">
                    <p>Email</p>
                    <p>max.musterman@example.com</p>
                    <span></span>
                </div><div class="settings_tn__pair">
                    <p>Home Airport</p>
                    <p>Vienna</p>
                </div>
            </div>
            <button class="dark_button logout_button">Logout</button>
        </div>
    </div>
@stop
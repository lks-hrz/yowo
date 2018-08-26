@extends('layouts.master')

@section('title', 'Settings')


@section('container')


    <main class="container">
        <div class="content_cnt">
            <div class="user_cnt">
                <div class="user_tn">
                    <img class="profilepic_tn" src="/storage/avatars/{{ $user[0]->avatar }}" alt="Profilbild">
                    <h2 class="uname_tn">{{ $user[0]->name }}</h2>
                </div>
            </div>
            <h3 class="heading">Settings</h3>
            <div class="settings_tn">

                <form method="POST" class="update_form" enctype="multipart/form-data" action="{{ route("updateUser", auth()->id()) }}">
                    {{ csrf_field() }}
                    @method('PUT')

                    <input class="avatar" id="avatar" type="file" name="avatar" value="{{ $user[0]->avatar }}">
                    <label for="avatar"><span><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                   viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="20px" height="20px">
	<path d="M54.63,10H3.37C1.512,10,0,11.512,0,13.37v35.26C0,50.488,1.512,52,3.37,52h51.26c1.858,0,3.37-1.512,3.37-3.37V13.37
		C58,11.512,56.488,10,54.63,10z M56,48.63c0,0.756-0.614,1.37-1.37,1.37H3.37C2.614,50,2,49.386,2,48.63V13.37
		C2,12.614,2.614,12,3.37,12h51.26c0.756,0,1.37,0.614,1.37,1.37V48.63z"/>
	<path d="M30,14c-9.374,0-17,7.626-17,17s7.626,17,17,17s17-7.626,17-17S39.374,14,30,14z M30,46c-8.271,0-15-6.729-15-15
		s6.729-15,15-15s15,6.729,15,15S38.271,46,30,46z"/>
                            <path d="M20,8h19c0.553,0,1-0.447,1-1s-0.447-1-1-1H20c-0.553,0-1,0.447-1,1S19.447,8,20,8z"/></svg></span> Profile Picture</label>
                    <div class="settings_tn_pair">
                        <label for="name">Name</label>
                        <input type="text" value="{{ $user[0]->name }}" name="name">
                    </div>
                    <div class="settings_tn_pair">
                        <label for="email">Email</label>
                        <input type="email" value="{{ $user[0]->email }}" name="email">
                    </div>
                    <button type="submit" class="bright_button">Update</button>
                </form>




                {{--<div class="settings_tn__pair">
                    <p>Name</p>
                    <p>{{ $user[0]->name }}</p>
                    <span></span>
                </div>
                <div class="settings_tn__pair">
                    <p>Email</p>
                    <p>{{ $user[0]->email }}</p>
                    <span></span>
                </div><div class="settings_tn__pair">
                    <p>Home Airport</p>
                    <p>Vienna</p>
                </div>--}}
            </div>
            <a href="{{ route('logout') }}"><button class="dark_button logout_button">Logout</button></a>

        </div>
    </main>



@stop
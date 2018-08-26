@extends('layouts.master')

@section('title', 'Create Story')


@section('container')

<main class="container">
    <div class="content_cnt">
        <div class="user_cnt">
            <div class="user_tn">
                <img class="profilepic_tn" src="/storage/avatars/{{ auth()->user()->avatar }}" alt="Profilbild">
                <h2 class="uname_tn">{{ auth()->user()->name }}</h2>
            </div>
        </div>
        <h3 class="heading">New Story</h3>
        <form class="create_story" enctype="multipart/form-data" action="{{ route("postCreate") }}" method="POST">
            {{ csrf_field() }}
            {{ method_field("POST") }}
            <div class="titleimg">
                <input type="file" name="title_img" id="title_img">
                <label for="title_img">

                     <span><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="20px" height="20px">
	<path d="M54.63,10H3.37C1.512,10,0,11.512,0,13.37v35.26C0,50.488,1.512,52,3.37,52h51.26c1.858,0,3.37-1.512,3.37-3.37V13.37
		C58,11.512,56.488,10,54.63,10z M56,48.63c0,0.756-0.614,1.37-1.37,1.37H3.37C2.614,50,2,49.386,2,48.63V13.37
		C2,12.614,2.614,12,3.37,12h51.26c0.756,0,1.37,0.614,1.37,1.37V48.63z"/>
	<path d="M30,14c-9.374,0-17,7.626-17,17s7.626,17,17,17s17-7.626,17-17S39.374,14,30,14z M30,46c-8.271,0-15-6.729-15-15
		s6.729-15,15-15s15,6.729,15,15S38.271,46,30,46z"/>
                            <path d="M20,8h19c0.553,0,1-0.447,1-1s-0.447-1-1-1H20c-0.553,0-1,0.447-1,1S19.447,8,20,8z"/></svg> Title Image</span>
                </label>
                <div class="preview">
                    <img src="" alt="">
                </div>
            </div>
            <input type="text" name="city" placeholder="City">

            <input type="text" name="title" placeholder="Title">
            <div class="form-group" data-idx="1">
                <textarea id="text_1" name="text_1" placeholder="Tell your story"></textarea>
                <input class="upload" type="file" name="upload_1" id="upload_1">
                <label for="upload_1">
                    <span><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve" width="20px" height="20px">
	<path d="M54.63,10H3.37C1.512,10,0,11.512,0,13.37v35.26C0,50.488,1.512,52,3.37,52h51.26c1.858,0,3.37-1.512,3.37-3.37V13.37
		C58,11.512,56.488,10,54.63,10z M56,48.63c0,0.756-0.614,1.37-1.37,1.37H3.37C2.614,50,2,49.386,2,48.63V13.37
		C2,12.614,2.614,12,3.37,12h51.26c0.756,0,1.37,0.614,1.37,1.37V48.63z"/>
	<path d="M30,14c-9.374,0-17,7.626-17,17s7.626,17,17,17s17-7.626,17-17S39.374,14,30,14z M30,46c-8.271,0-15-6.729-15-15
		s6.729-15,15-15s15,6.729,15,15S38.271,46,30,46z"/>
                            <path d="M20,8h19c0.553,0,1-0.447,1-1s-0.447-1-1-1H20c-0.553,0-1,0.447-1,1S19.447,8,20,8z"/></svg></span>
                </label>
            </div>
            <div class="make_private">
                <input type="checkbox" name="private" value="private">
                <label for="private">Make this story private</label>
            </div>
            <button type="submit" id="create-story" class="dark_button">Spread the Word</button>
        </form>
    </div>
</main>

@stop
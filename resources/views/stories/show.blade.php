@extends('layouts.master')


@section('title', $data["title"])


@section('container')

    <main class="container">
        <div class="content_cnt">
            <div class="user_cnt">
                <a href="{{ route('showuser', $data["user_id"]) }}">
                    <div class="user_tn">
                        <img class="profilepic_tn" src="/storage/avatars/{{ $data['avatar'] }}" alt="Profilbild">
                        <h3 class="uname_tn">{{ $data["uname"]}}</h3>
                    </div>
                </a>
            </div>
            <h2 class="story_city">{{ $data["city"] }}</h2>

            <div class="cnt">
                <h3 class="story_titel">{{ $data["title"] }}</h3>
                <img src="/storage/stories/{{ $data["title_image"] }}" alt="" class="title_img">
                <input type="hidden" class="story_id" name="story_id" value="{{ $data["story_id"] }}">



            @foreach($data["text"] as $key => $val)
                    <div class="story">
                        {{--{!! $data[0]->description !!}--}}
                        {!! $val !!}
                        <img src="/storage/stories/{{ $data["images"][$key] }}" alt="">
                    </div>
                @endforeach
                <button class="like_btn show_like_btn"><span
                            @if($data["story_liked"] == true) data-liked="true" style="background-color: RGBA(249, 22, 40, 0.15)"
                            @endif class="like_span"><svg xmlns="http://www.w3.org/2000/svg"
                                                          xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                          id="Capa_1" x="0px" y="0px" viewBox="0 0 51.997 51.997"
                                                          style="enable-background:new 0 0 51.997 51.997;"
                                                          xml:space="preserve" width="20px" height="20px">
	<path id="like_svg"
          d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905   c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478   c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014   C52.216,18.553,51.97,16.611,51.911,16.242z M49.521,21.261c-0.984,4.172-3.265,7.973-6.59,10.985L25.855,47.481L9.072,32.25   c-3.331-3.018-5.611-6.818-6.596-10.99c-0.708-2.997-0.417-4.69-0.416-4.701l0.015-0.101C2.725,9.139,7.806,3.826,14.158,3.826   c4.687,0,8.813,2.88,10.771,7.515l0.921,2.183l0.921-2.183c1.927-4.564,6.271-7.514,11.069-7.514   c6.351,0,11.433,5.313,12.096,12.727C49.938,16.57,50.229,18.264,49.521,21.261z"
           @if($data["story_liked"] == true) fill="red" @else fill="#59545A" @endif/>
                        </svg></span></button>
                <p class="response"></p>
                <button class="flag_btn">Flag this story</button>
            </div>
            {{--<hr>
            <hr>

            <img src="/img/eifelturm.jpeg" alt="" class="post_img">
            <p class="story_txt">Lemon drops macaroon croissant pastry
                marzipan icing cupcake.
                Cake marzipan cookie danish halvah.</p>
            <p class="story_txt">Halvah tiramisu wafer candy canes bonbon pie brownie sesame snaps jelly-o. Carrot cake
                pie biscuit. Ice cream pudding carrot cake candy canes tiramisu pastry. Lemon drops liquorice chocolate
                cake cookie icing cupcake chocolate. Pastry sweet roll donut toffee sesame snaps. Marzipan jelly beans
                pudding chocolate cake gummi bears. Jelly-o soufflé cupcake tootsie roll sweet roll pie macaroon. Jelly
                beans biscuit jelly-o chocolate bar. Pie sugar plum powder donut.
            </p>
            <p class="story_txt">Lemon drops macaroon croissant pastry
                marzipan icing cupcake.
                Cake marzipan cookie danish halvah.</p>


            <img src="/img/eifelturm.jpeg" alt="" class="post_img">
            <p class="story_txt">Lemon drops macaroon croissant pastry
                marzipan icing cupcake.
                Cake marzipan cookie danish halvah.</p>
            <p class="story_txt">Halvah tiramisu wafer candy canes bonbon pie brownie sesame snaps jelly-o. Carrot cake
                pie biscuit. Ice cream pudding carrot cake candy canes tiramisu pastry. Lemon drops liquorice chocolate
                cake cookie icing cupcake chocolate. Pastry sweet roll donut toffee sesame snaps. Marzipan jelly beans
                pudding chocolate cake gummi bears. Jelly-o soufflé cupcake tootsie roll sweet roll pie macaroon. Jelly
                beans biscuit jelly-o chocolate bar. Pie sugar plum powder donut.
            </p>
            <p class="story_txt">Lemon drops macaroon croissant pastry
                marzipan icing cupcake.
                Cake marzipan cookie danish halvah.</p>--}}


        </div>

    </main>



@stop

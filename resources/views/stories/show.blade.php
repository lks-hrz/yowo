@extends('layouts.master')


@section('container')

    <div class="container">
        <div class="content_cnt">
            <div class="user_cnt">
                <a href="{{ route('showuser') }}">
                    <div class="user_tn">
                        <img class="profilepic_tn" src="/img/mann.jpeg" alt="Profilbild">
                        <h3 class="uname_tn">Max Musterman</h3>
                    </div>
                </a>
                <div class="story_stats">
                    <p>37289 miles in air</p>
                    <p>48 hours in air</p>
                    <p>1,3 times to the moon</p>
                </div>
            </div>
            <a href="{{ route('showcity') }}"><h2 class="story_city">Paris</h2></a>
            <div class="story_answer">
                <div class="answer_pair">
                    <p>From airport to city</p>
                    <p>Train</p>
                </div>
                <div class="answer_pair">
                    <p>From airport to city</p>
                    <p>Train</p>
                </div>
                <div class="answer_pair">
                    <p>From airport to city</p>
                    <p>Train</p>
                </div>
                <div class="answer_pair">
                    <p>From airport to city</p>
                    <p>Train</p>
                </div>
            </div>
            <h3 class="story_titel">One night in Paris</h3>

            <img src="/img/eifelturm.jpeg" alt="" class="post_img">
            <p class="story_txt">Lemon drops macaroon croissant pastry
                marzipan icing cupcake.
                Cake marzipan cookie danish halvah.</p>
            <p class="story_txt">Halvah tiramisu wafer candy canes bonbon pie brownie sesame snaps jelly-o. Carrot cake pie biscuit. Ice cream pudding carrot cake candy canes tiramisu pastry. Lemon drops liquorice chocolate cake cookie icing cupcake chocolate. Pastry sweet roll donut toffee sesame snaps. Marzipan jelly beans pudding chocolate cake gummi bears. Jelly-o soufflé cupcake tootsie roll sweet roll pie macaroon. Jelly beans biscuit jelly-o chocolate bar. Pie sugar plum powder donut.
            </p>
            <p class="story_txt">Lemon drops macaroon croissant pastry
                marzipan icing cupcake.
                Cake marzipan cookie danish halvah.</p>
            <img src="/img/eifelturm.jpeg" alt="" class="post_img">
            <p class="story_txt">Lemon drops macaroon croissant pastry
                marzipan icing cupcake.
                Cake marzipan cookie danish halvah.</p>
            <p class="story_txt">Halvah tiramisu wafer candy canes bonbon pie brownie sesame snaps jelly-o. Carrot cake pie biscuit. Ice cream pudding carrot cake candy canes tiramisu pastry. Lemon drops liquorice chocolate cake cookie icing cupcake chocolate. Pastry sweet roll donut toffee sesame snaps. Marzipan jelly beans pudding chocolate cake gummi bears. Jelly-o soufflé cupcake tootsie roll sweet roll pie macaroon. Jelly beans biscuit jelly-o chocolate bar. Pie sugar plum powder donut.
            </p>
            <p class="story_txt">Lemon drops macaroon croissant pastry
                marzipan icing cupcake.
                Cake marzipan cookie danish halvah.</p>

        </div>

    </div>



@stop

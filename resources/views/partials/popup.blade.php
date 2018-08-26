<div class="logreg_pop">
    <a href="#" class="close">
        <span></span>
        <span></span>
    </a>
    <h2>YOWO</h2>
    <button class="bright_button login_btn">Log In</button>
    <button class="dark_button register_btn">Register</button>
</div>
<div class="login">
    <a href="#" class="close">
        <span></span>
        <span></span>
    </a>
    <h2>YOWO</h2>
    <form method="post" action="{{ route('login') }}" class="logreg_form">
        {{ csrf_field() }}
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="submit_button" id="log_button">Log In</button>
    </form>
</div>
<div class="register">
    <a href="#" class="close">
        <span></span>
        <span></span>
    </a>
    <h2>YOWO</h2>
    <form method="post" action="{{ route('register') }}" class="logreg_form">

        {{ csrf_field() }}

        <input type="text" placeholder="Name" id="name" name="name">
        <input type="email" placeholder="Email" id="email" name="email">
        <input type="password" placeholder="Password" id="password" name="password">
        <input type="password" placeholder="Repeat Password" id="password_confirmation" name="password_confirmation">
        <button type="submit" class="submit_button" id="register_button">Register</button>

    </form>
</div>
<div class="add">
    <a href="#" class="close">
        <span></span>
        <span></span>
    </a>
    <h2>YOWO</h2>
    <button class="bright_button add_flight_btn">Add Flight</button>
    <a href="{{ route('createstory') }}"><button class="dark_button add_story_btn">Wirte Story</button></a>
</div>
<div class="add_flight">
    <a href="#" class="close">
        <span></span>
        <span></span>
    </a>
    <h2>YOWO</h2>
    <form method="post" action="{{ route("flightCreate") }}" class="logreg_form">
        {{ csrf_field() }}
        <input type="text" placeholder="Flightnumber" name="flightnumber">
        <input type="date" placeholder="Date" name="date">
        <button type="submit" id="create_flight" class="submit_button">Check Flight</button>
        <span class="error"></span>
    </form>
{{--
    <button type="submit" id="create_flight" class="submit_button">Check Flight</button>
--}}


</div>




<div class="homenavbar">
    <a href="{{ route("home") }}"><img src="/img/YOWOLogo.png" alt="YOWO Logo" class="logo"></a>
    @if(Route::is("home"))
        <h1>Yowo</h1>
    @endif

    <div class="nav_search @if(Route::is("home")) home @endif">
        <span>+</span>
        <form action="">
            <input type="search">
        </form>
    </div>

    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <button class="bright_button login_btn">Log In</button>
                <button class="dark_button register_btn">Register</button>
                <a class="menu_link" href="#"><li>Your World</li></a>
                <div class="menu_line"></div>
                <a class="menu_link" href="#"><li>Your Stats</li></a>
                <div class="menu_line"></div>
                <a class="menu_link" href="#"><li>Your Stories</li></a>
            </ul>
        </div>
    </nav>
</div>
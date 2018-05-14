<div class="homenavbar">
    <a href="{{ route("home") }}"><img src="/img/YOWOLogo.png" alt="YOWO Logo" class="logo"></a>
    @if(Route::is("home"))
        <h1>Yowo</h1>
    @endif

    <div class="nav_search @if(Route::is("home")) home @endif">
        <div class="plus">
            <span></span>
            <span></span>
        </div>
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
                <li><button class="bright_button login_btn">Log In</button></li>
                <li><button class="dark_button register_btn">Register</button></li>
                <li class="menu_item"><a class="menu_link" href="yourworld">Your World</a></li>
                <li><span class="menu_line"></span></li>
                <li class="menu_item"><a class="menu_link" href="yourstats">Your Stats</a></li>
                <li><span class="menu_line"></span></li>
                <li class="menu_item"><a class="menu_link" href="yourstories">Your Stories</a></li>
            </ul>
        </div>
    </nav>
</div>
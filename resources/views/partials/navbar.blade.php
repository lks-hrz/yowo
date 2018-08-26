<div class="homenavbar">
    <a href="{{ route("home") }}"><img src="/img/YOWOLogo.png" alt="YOWO Logo" class="logo"></a>
    @if(Route::is("home"))
        <h1>Yowo</h1>
    @endif

    <div class="nav_search @if(Route::is("home")) home @endif">
        <a href="#" class="@if (auth()->check()) hero-add @else hero-log @endif">
            <div class="plus">
                <span></span>
                <span></span>
            </div>
        </a>
        <div class="nav_search_container">
            <form method="post"  action="{{ route("showCity") }}" >
                {{ csrf_field() }}



                <input type="search" name="city">
                <button type="submit"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                           viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve" width="10px" height="10px">
<path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
	c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
	C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
	S32.459,40,21.983,40z"/></svg></button>
            </form>
        </div>


    </div>

    <nav role="navigation" class="nav_menu">
        <div id="menuToggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                @if( auth()->check())
                    <li class="menu_item"><a href="{{ route('editUser', auth()->id()) }}"><img class="profilepic_tn" src="/storage/avatars/{{ auth()->user()->avatar }}" alt="Profilbild"></a></li>
                    <li class="menu_item"><a class="menu_link" href="{{ route('yourWorld') }}">Your World</a></li>
                    <li><span class="menu_line"></span></li>
                    <li class="menu_item"><a class="menu_link" href="{{ route('yourStats') }}">Your Stats</a></li>
                    <li><span class="menu_line"></span></li>
                    <li class="menu_item"><a class="menu_link" href="{{ route('yourStories') }}">Your Stories</a></li>
                    <li class="menu_item"><a class="menu_link" href=" {{ route('logout') }}">Logout</a></li>
                    @if(auth()->user()->user_group == 1)
                        <li class="menu_item"><a class="menu_link" href="{{ route('showAdmin') }}">Flaged Stories</a></li>
                        @endif
                @else
                    <li>
                        <button class="bright_button login_btn login_btn_nav">Log In</button>
                    </li>
                    <li>
                        <button class="dark_button register_btn register_btn_nav">Register</button>
                    </li>
                    <li class="menu_item side-log"><a class="menu_link" href="#">Your World</a></li>
                    <li><span class="menu_line"></span></li>
                    <li class="menu_item"><a class="menu_link" href="yourstats">Your Stats</a></li>
                    <li><span class="menu_line"></span></li>
                    <li class="menu_item"><a class="menu_link" href="yourstories">Your Stories</a></li>

                @endif
            </ul>
        </div>
    </nav>
</div>
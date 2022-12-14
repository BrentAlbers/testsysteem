<header>
    <nav>
        <a href="{{ route('home') }}">home</a>
        <a href="{{ route('overons') }}">over ons</a>
        <a href="{{ route('contact') }}">contact</a>


        @if(Auth::check())
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button class="nav-link" type="submit">Logout</button>

            </form>
            @if(Auth::user()->admin == 1)
                <a href="{{ route('events') }}">make event page</a>
            @endif
        @else
            <a href="{{ route('login') }}">login</a>
            <a href="{{ route('register') }}">register</a>
        @endif 


    </nav>
</header>
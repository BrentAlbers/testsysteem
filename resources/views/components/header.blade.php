<header>
    <nav>
        <a href="{{ route('home') }}">home</a>
        <a href="{{ route('overons') }}">over ons</a>
        <a  href="{{ route('contact') }}">contact</a>
        <a  href="{{ route('publicevents') }}">events</a>


        @if(Auth::check())
            @if(Auth::user()->admin == 1)
                <a href="{{ route('events') }}">admin event page</a>
            @endif
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button class="nav-link" type="submit">Logout</button>

            </form>

        @else
            <a href="{{ route('login') }}">login</a>
            <a href="{{ route('register') }}">register</a>
        @endif 


    </nav>
</header>
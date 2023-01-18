
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="/" :active="request()->routeIs('home')">
                        Home
                    </x-nav-link>
                    <x-nav-link href="{{ route('overons') }}" :active="request()->routeIs('overons')">
                        Over ons
                    </x-nav-link>
                    <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                        contact
                    </x-nav-link>
                    <x-nav-link href="{{ route('publicevents') }}" :active="request()->routeIs('publicevents')">
                        Events
                    </x-nav-link>
                    @if(Auth::check())
                        <x-nav-link href="{{ route('mytickets') }}" :active="request()->routeIs('mytickets')">
                            My tickets
                        </x-nav-link>
                        @if(Auth::user()->admin == 1)
                            <x-nav-link href="{{ route('events') }}" class="text-gray-400" :active="request()->routeIs('events')">
                                admin event page
                            </x-nav-link>
                        @endif


                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>

                        @else
                        <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                            login
                        </x-nav-link>
                        <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                            register
                        </x-nav-link>
                        @endif 
                </div>
            </div>

            <!-- Settings Dropdown -->

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />dwad
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />dawd
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    
</nav>

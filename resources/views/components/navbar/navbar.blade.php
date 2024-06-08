@vite(['resources/css/app.css', 'resources/js/app.js'])

<nav class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100 relative z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <img src="#" class="h-8" alt="" />
            <i class="fas fa-plane-departure text-2xl pr-3"></i>
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-800">FlyHigh</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-[#141b2b] md:flex-row md:space-x-8 md:mt-0 md:bg-transparent">
                <li>
                    <a href="{{route('home')}}#about" class="block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">About</a>
                </li>
                <li>
                    <a href="{{route('home')}}#gallery" class="block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Gallery</a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="{{ route('dashboard') }}" class="block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Book now</a>
                    </li>
                    <li class="nav-item dropdown block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">
                        <a id="navbarDropdown" id="dropdownDefaultButton" data-dropdown-toggle="dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div id='dropdown' class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" aria-labelledby="navbarDropdown">
                            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="{{ route('bookings') }}">
                                My Bookings
                            </a>

                            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<nav class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100 relative z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3">
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
                    <a href="#home" class="block py-2 px-3 text-gray-800 bg-blue-700 rounded md:bg-transparent md:text-white md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#about" class="block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">About</a>
                </li>
                <li>
                    <a href="#features" class="block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Services</a>
                </li>
                <li>
                    <a href="#footer" class="block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
                </li>
                <li>
                    <a href="#footer" class="block py-2 px-3 text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Account</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

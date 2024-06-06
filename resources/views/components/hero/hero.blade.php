{{-- <div class="hero z-[1] w-full h-[100vh] grid place-items-center bg-[#141b2b] relative">
    <div class="flex md:flex-row flex-col items-center w-full md:px-[200px] px-8 justify-between md:gap-0 gap-28">
        <div class="flex flex-col gap-3 left-animation w-full">
            <span class="text-blue-400 text-[25px] font-medium">
                Welcome To fly high
            </span>
            <span class="text-white font-medium md:text-[30px] text-[35px]">
                Luxury Experience <br /> With Our Services.
            </span>
            <span class="text-white leading-7 max-w-[300px] text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam nulla ipsa unde inventore minus commodi saepe? Eos cumque aliquam consequatur id optio dolorum modi quod?
            </span>
            <div class="flex items-center gap-7 mt-5">
                <button class="bg-blue-400 px-6 py-3 text-gray-900 font-semibold rounded-full">
                    Book Flight
                </button>
                <button class="border-[2px] border-white-100 px-6 py-3 text-white font-semibold rounded-full">
                    Contact Us
                </button>
            </div>
        </div>
        <img src="images/plane_hero.png" class="md:w-[100%] w-full right-animation" alt="">
    </div>
</div> --}}


<section class="relative bg-blueGray-50">
    <div class="h-screen font-sans flex items-center justify-between px-8" style="background-image: url('images/plane1.jpg'); background-size: cover; background-position: center;">
        <div class="w-1/2 pl-32">
        <div>
            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-3xl xl:text-4xl">
            <p class="sm:block">Find the best deals</p>
            <span class="text-indigo-300 md:block">on flights around the world</span>
            <p class="text-indigo-600 md:block">with our airplane ticketing service.</p>
            </h1>
        </div>
        <div>
            <div class="w-full mt-10 sm:flex sm:justify-center lg:justify-start">
                <a href="{{route('dashboard')}}" class="inline-flex items-center text-white bg-indigo-600 hover:bg-indigo-800 justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full sm:w-auto">Search Flights</a>
                <a href="{{route('register')}}" class="ml-2 inline-flex items-center text-white bg-indigo-600 hover:bg-indigo-800 justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full sm:w-auto">Create Account</a>
            </div>
        </div>
        </div>
        <div class="w-1/2 ml-6 mr-32 bg-[#6875f550] h-[40vh] rounded-xl flex flex-col items-center justify-center">
        <div class="bg-transparent">
            <p class="text-3xl font-semibold text-white mx-12">
                Plan your next journey with ease. With our service, you can explore destinations, compare prices, and book flights hassle-free.
            </p>
        </div>
        <div class="flex bg-transparent w-full mt-12 justify-between">
            <div class="w-fit px-12 flex items-center flex-col">
                <div class="inline-flex items-center justify-center px-3 py-0.5 text-sm font-medium leading-5 text-indigo-600 bg-indigo-200 rounded-full">Daily Deals</div>
                <p class="text-3xl font-bold text-white">$99+</p>
            </div>
            <div class="w-fit px-12 flex items-center flex-col">
                <div class="inline-flex items-center justify-center px-3 py-0.5 text-sm font-medium leading-5 text-indigo-600 bg-indigo-200 rounded-full">Destinations</div>
                <p class="text-3xl font-bold ml-4 text-white">70+</p>
            </div>
            <div class="w-fit px-12 flex items-center flex-col">
                <div class="inline-flex items-center justify-center px-4 py-0.5 text-sm font-medium leading-5 text-indigo-600 bg-indigo-200 rounded-full">Customers</div>
                <p class="text-3xl font-bold ml-4 text-white">500K+</p>
            </div>
            <div class="w-fit px-12 flex items-center flex-col">
                <div class="inline-flex items-center justify-center px-4 py-0.5 text-sm font-medium leading-5 text-indigo-600 bg-indigo-200 rounded-full">Partners</div>
                <p class="text-3xl font-bold ml-4 text-white">20+</p>
            </div>
        </div>
        </div>
    </div>  
    <section class="pb-10 bg-blueGray-200 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-6 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Award-Winning Service</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                                Experience our award-winning customer service. We're here to make your booking seamless and stress-free.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Loyal Customers</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                                Join our family of repeating customers who trust us for their travel needs. Book with us and enjoy exclusive rewards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                <i class="fas fa-plane"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Trusted Partnerships</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                                We partner with verified airlines to bring you the best deals and most reliable flight options. Fly with confidence!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</section>
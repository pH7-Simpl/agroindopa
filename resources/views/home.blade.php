<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('build/assets/AgroIndoLogoH.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>AgroIndo</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body class="bg-gray-50 text-black dark:bg-black dark:text-white">

    <nav
        class="fixed top-0 z-50 w-full h-16 sm:h-20 flex justify-between items-center px-10 md:px-20 font-Playfair font-semibold hero-text text-lg md:text-xl rounded-b-[40px] sm:rounded-b-[56px] drop-shadow-2xl {{ $isScrolled ? 'bg-cust-darker-green' : 'bg-transparent' }} transition-all duration-350 ease-in-out">
        <div class="flex w-full justify-between items-center">
            <!-- Logo Section -->
            <div class="flex flex-row w-1/2 justify-start items-center text-2xl"
                style="marginLeft: -10px; marginTop: 10px;">
                <img src="/assets/AgroIndoLogoTEXT.png" width="200" alt="AgroIndo Logo">
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex flex-row gap-8">
                <a href="{{ url('/') }}" class="navbar-button">HOME</a>
                <a href="{{ url('/our-products') }}" class="navbar-button">OUR PRODUCTS</a>
                <a href="{{ url('/contact-us') }}" class="navbar-button">CONTACT US</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="navbar-button">DASHBOARD</a>
                    @else
                        <a href="{{ route('login') }}" class="navbar-button">LOGIN</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="navbar-button">REGISTER</a>
                        @endif
                    @endauth
                @endif
            </div>

            <!-- Mobile Navigation -->
            <div class="lg:hidden relative">
                <button style="marginTop: 50px" onclick="toggleDropdown()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2.5" d="M3 6h18M3 12h18M3 18h18" />
                    </svg>
                </button>
                @if($isOpen)
                    <ul
                        class="absolute flex flex-col gap-1 right-0 top-16 min-w-[50px] text-center justify-center items-center bg-cust-darker-green rounded-lg shadow-lg">
                        <li class="w-full px-6 py-2" onclick="navigate('/')">HOME</li>
                        <li class="w-full px-6 py-2" onclick="navigate('/our-products')">OUR PRODUCTS</li>
                        <li class="w-full px-6 py-2" onclick="navigate('/contact-us')">CONTACT US</li>
                        @if (Route::has('login'))
                            @auth
                                <li class="w-full px-6 py-2" onclick="navigate('/dashboard')">DASHBOARD</li>
                            @else
                                <li class="w-full px-6 py-2" onclick="navigate('/login')">LOGIN</li>
                                @if (Route::has('register'))
                                    <li class="w-full px-6 py-2" onclick="navigate('/register')">REGISTER</li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    <script>
        let isOpen = false;
        function toggleDropdown() {
            isOpen = true;
            // Update the state and re-render if using a framework like Vue or React
        }

        function navigate(url) {
            window.location.href = url;
        }
    </script>

    <div class="content">
        <div class="flex flex-col w-full gap-10 sm:gap-20">
            <!-- HERO SECTION -->
            <div
                class="flex flex-col min-h-screen w-full z-40 bg-Hero1 font-bold font-Playfair -mt-16 text-xl text-cust-light-cream items-center sm:items-start justify-center px-10 md:px-20 gap-3 md:gap-5">
                <div class="text-6xl md:text-8xl font-semibold hero-text">AgroIndo</div>
                <div class="text-center sm:text-left text-lg md:text-2xl font-semibold font-Montserrat hero-text">
                    Indonesia’s Agriculture Exporter
                </div>
            </div>
        </div>
    </div>
    <!-- THE REST -->
    <div class="flex flex-col min-h-screen w-full z-10 bg-HomeBG bg-no-repeat bg-cover gap-10 sm:gap-20">
        <!-- ABOUT US -->
        <div
            class="flex flex-col-reverse md:flex-row w-full justify-center items-center px-10 md:px-20 lg:px-64 gap-36 sm:gap-28 mb-32">
            <div class="flex flex-col w-full md:w-1/2 sm:w-5/12 tx-cust-dark-green gap-4">
                <div class="font-black font-Playfair text-4xl">About Us</div>
                <div class="font-medium font-Montserrat text-[17px] text-justify">
                    AgroIndo is dedicated to showcasing Indonesia's natural bounty to the global stage. We take
                    pride in introducing premium-quality powdered products derived from Indonesia's rich
                    agricultural produce. At AgroIndo, we bridge the gap between local producers and the global
                    market, ensuring that the essence of Indonesian agriculture reaches discerning consumers
                    worldwide.
                </div>
            </div>
            <div class="flex w-1/2 sm:w-7/12 justify-end items-center">
                <div
                    class="flex relative bg-AboutPict1 bg-cover bg-no-repeat bg-top w-[170px] sm:w-[250px] md:w-[370px] h-[170px] sm:h-[250px] md:h-[370px] rounded-2xl sm:rounded-[40px] drop-shadow-2xl">
                    <div
                        class="absolute -left-16 sm:-left-24 -bottom-16 sm:-bottom-24 md:-bottom-32 bg-AboutPict2 bg-cover bg-no-repeat bg-bottom w-[150px] sm:w-[220px] md:w-[300px] h-[150px] sm:h-[220px] md:h-[300px] rounded-2xl sm:rounded-[40px]">
                    </div>
                </div>
            </div>
        </div>

</html>
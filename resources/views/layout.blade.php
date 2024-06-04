<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="font-sans">
    <header class="bg-[#2E3D2A] text-white p-1 rounded-b-3xl">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-lg font-bold">
                <a href="{{ url('/') }}">
                    <img src="/assets/AgroIndoLogoTEXT.png" alt="AgroIndo Logo" style="width: 180px">
                </a>
            </div>
    
            <div class="relative">
                <button onclick="toggleDropdown()" class="flex items-center focus:outline-none">
                    <span class="ml-2">Mr.X</span>
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white text-black rounded-md shadow-lg z-10 hidden">
                    <a href="/profile" class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                    <a href="/settings" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
                    <a href="/logout" class="block px-4 py-2 hover:bg-gray-200">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[#2E3D2A] text-white py-6 mt-4 rounded-t-3xl">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-4">
            <!-- First column -->
            <div class="space-y-6">
                <h5 class="text-2xl font-bold">AgroIndo</h5>
                <div class="flex gap-4 text-wrap items-center">
                    <i data-lucide="map" class="size-12"></i>
                    <!-- Add whitespace utility class for text wrapping -->
                    <p class="whitespace-normal">Denmoza Hill 1, Ulesari, Tirtomoyo, Pakis Subdistrict, Malang Regency, East Java, Indonesia 65154</p>
                </div>
                <div class="flex gap-4 text-wrap items-center">
                    <i data-lucide="mail" class="size-8"></i>
                    <!-- Add whitespace utility class for text wrapping -->
                    <div>
                        <p class="whitespace-normal">Email : agroindomlg@gmail.com</p>
                        <p class="whitespace-normal">Mobile : (+62)85234970431</p>
                    </div>
                </div>
            </div>
    
            <!-- Second column -->
            <div class="flex items-center justify-center space-x-12">
                <div>
                    <i class="fa fa-telegram" style="font-size:56px"></i>
                </div>
                <div>
                    <i class="fa fa-whatsapp" style="font-size:56px"></i>
                </div>
                <div>
                    <i class="fa fa-instagram" style="font-size:56px"></i>
                </div>
            </div>
    
            <!-- Third column -->
            <div class="items-center justify-center space-y-6 ml-28">
                <h5 class="text-2xl font-bold">In Corporation With</h5>
                <div class="flex gap-4 text-wrap items-center">
                    <img src="/assets/CartractLogo.png" alt="" style="width: ">
                </div>
            </div>
            
            <!-- Fourth column (optional) -->
            <!-- Add more columns if needed -->
        </div>
        <div>
            <h5 class="text-xl font-bold text-center">CV. Agroindo Cipta Sejahtera</h5>
        </div>
        <hr class="my-6">
        <div class="container mx-auto">
            <div class="flex flex-col items-center">
                <p class="text-sm text-center">Copyright &copy; 2024 AGROINDO- Moneh Team</p>
            </div>
        </div>
    </footer>
    
    
      <script src="https://unpkg.com/lucide@latest"></script>
      <script>
          lucide.createIcons();
      </script>
</body>
</html>
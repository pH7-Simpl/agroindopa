<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AgroIndo') }}</title>

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
    
            <div class="flex gap-2 items-center justify-end cursor-pointer" onclick="toggleDropdown()">
                <div class="flex flex-col">
                    <p class="font-bold">Mr. X</p>
                </div>
                <i data-lucide="chevron-down"></i>
                <div id="dropdown" class="hidden absolute top-20 bg-[#F8FAE5] border border-neutral-300 rounded-md shadow-lg z-10 text-black">
                    <a href="/profile" class="flex justify-start items-center py-3 pl-4 pr-6 gap-4 hover:bg-[#d8dac7]">
                        <p>Profil</p>
                    </a>
                    <a href="/dashboard" class="flex justify-start items-center py-3 pl-4 pr-6 gap-4 hover:bg-[#d8dac7]">
                        <p>Dashboard</p>
                    </a>
                    <a href="/home" class="flex justify-start items-center py-3 pl-4 pr-6 gap-4 hover:bg-[#d8dac7]">
                        <p>Our Products</p>
                    </a>
                    <a href="/contact-us" class="flex justify-start items-center py-3 pl-4 pr-6 gap-4 hover:bg-[#d8dac7]">
                        <p>Contact Us</p>
                    </a>
                    <a href="/" class="flex justify-start items-center py-3 pl-4 pr-6 gap-4 text-red-600 hover:bg-red-100">
                        <p>Logout</p>
                    </a>
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
                    <a href="https://t.me/6282337458131?text=Hi,20%i20%want20%to20%buy." class="fa fa-telegram" style="font-size:56px"></a>
                </div>
                <div>
                    <a href="https://wa.me/6282337458131?text=Hi,20%i20%want20%to20%buy." class="fa fa-whatsapp" style="font-size:56px"></a>
                </div>
                <div>
                    <a href="https://instagram.com/agroindo.id" class="fa fa-instagram" style="font-size:56px"></a>
                </div>
            </div>
    
            <!-- Third column -->
            <div class="items-center justify-center space-y-6 ml-28">
                <h5 class="text-2xl font-bold">In Corporation With</h5>
                <a href="https://cartrack.id" class="flex gap-4 text-wrap items-center">
                    <img src="/assets/CartractLogo.png" alt="CarTrack" style="width: ">
                </a>
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
                <p class="text-sm text-center">Copyright &copy; 2024 AGROINDO - Kelompok 2</p>
            </div>
        </div>
    </footer>
    
    
      <script src="https://unpkg.com/lucide@latest"></script>
      <script>
          lucide.createIcons();
      </script>

        <script>
            function toggleDropdown() {
                var dropdown = document.getElementById("dropdown");
                var caret = document.getElementById("caret");

                dropdown.classList.toggle("hidden");
                caret.classList.toggle("rotate-180");
            }
        </script>
</body>
</html>
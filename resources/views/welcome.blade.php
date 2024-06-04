<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="relative min-h-screen bg-image-landing bg-cover bg-center flex flex-col">
        <div class="flex w-full sm:w-1/2 h-full absolute items-center justify-left ml-12">
            <img src="/assets/AgroIndoText.svg" alt="AgroIndoText" style="width: 50%">
        </div>
        <div id="box" class="bg-[#F8FAE5] w-full sm:w-1/2 h-full p-6 opacity-90 absolute top-0 right-0 sm:rounded-bl-lg flex flex-col items-center justify-center space-y-6">
            <div class="absolute top-4 right-4">
                <button class="align-middle select-none font-bold text-center text-xl py-1 px-4 border-2 border-[#43766C] text-[#43766C] hover:opacity-75 active:opacity-[0.85] rounded-full">Contact Us</button>
            </div>
            <div class="flex flex-col items-center space-y-10">
                <h1 class="text-[#43766C] font-black text-7xl">Let's Start</h1>
                <div class="space-x-6 flex items-center">
                    <button class="align-middle select-none font-bold text-center text-xl py-1 px-4 border-2 border-[#43766C] text-[#43766C] hover:opacity-75 active:opacity-[0.85] rounded-full">Register</button>
                    <button class="align-middle select-none font-bold text-center text-xl py-1 px-4 border-2 border-[#43766C] text-[#43766C] hover:opacity-75 active:opacity-[0.85] rounded-full">Login</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

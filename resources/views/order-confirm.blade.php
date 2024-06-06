@extends('layout')

<!DOCTYPE html>
<html lang="en">

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

<body class="bg-[#F8FAE5]">
    @section('content')
    <div class="mx-8 py-12">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Delivery Address Card -->
            <div class="bg-[#2E3D2A] shadow-md rounded-md p-6 text-white">
                <h2 class="text-lg font-semibold mb-4">Delivery Address</h2>
                <p class="">John Doe</p>
                <p class="">123 Main Street</p>
                <p class="">Anytown, USA</p>
                <p class="">12345</p>
                <div class="flex items-center justify-center">
                    <a href="/profil" class="mt-4 px-6 py-2 bg-white text-black font-semibold rounded-lg hover:bg-gray-500">Change
                        Address</a>
                    </div>
                </div>

            <!-- Shopping Summary Card -->
            <div class="bg-[#2E3D2A] shadow-md rounded-md p-6 text-white">
                <h2 class="text-lg font-semibold mb-4">Shopping Summary</h2>
                <div class="flex justify-between mb-2  text-white">
                    <span class="">Subtotal:</span>
                    <span class="">$50.00</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="">Shipping:</span>
                    <span class="">$5.00</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="">Total:</span>
                    <span class="">$55.00</span>
                </div>
                <div class="flex items-center justify-center">
                    <a href="https://wa.me/6282337458131?text=Hi,20%i20%want20%to20%buy." class="mt-4 px-6 py-2 bg-white text-black font-semibold rounded-lg hover:bg-gray-500">Payment Via Admin</a>
                </div>
            </div>

            <!-- Shopping Details Card -->
        </div>
        <div class="bg-[#2E3D2A] shadow-md rounded-md p-6 col-span-2 mt-6 text-white">
            <h2 class="text-lg font-semibold mb-4">Shopping Details</h2>
            <ul>
                <li class="flex justify-between mb-2">
                    <span class="">Product Name 1</span>
                    <span class="">$20.00</span>
                </li>
                <li class="flex justify-between mb-2">
                    <span class="">Product Name 2</span>
                    <span class="">$30.00</span>
                </li>
                <!-- Add more shopping details here -->
            </ul>
        </div>
        <!-- <div class="bg-[#2E3D2A] shadow-md rounded-md p-6 col-span-2 mt-6 text-white">
            <h2 class="text-lg font-semibold mb-4">Payment Selection</h2>
            <div class="flex justify-between mb-2">
                <div>
                    <span class="text-left">Visa</span>
                </div>
                <div>
                Total Payment : $50.00
                </div>
            </div>
            <div class="flex justify-between mb-2">
                <div>
                    <span class="text-left">Paypal</span>
                </div>
                <div>
                    <button class="mt-4 px-6 py-2 bg-white text-black font-semibold rounded-lg hover:bg-gray-500">Pay</button>
                </div>
            </div>            
        </div> -->
    </div>
    @endsection
</body>

</html>
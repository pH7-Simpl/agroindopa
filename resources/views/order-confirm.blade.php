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
                <p class="">{{ Auth::user()->address }}</p>
                <div class="flex items-center justify-center">
                    <a href="/edit-profile" class="mt-4 px-6 py-2 bg-white text-black font-semibold rounded-lg hover:bg-gray-500">Change
                        Address</a>
                    </div>
                </div>

            <!-- Shopping Summary Card -->
            <div class="bg-[#2E3D2A] shadow-md rounded-md p-6 text-white">
                <h2 class="text-lg font-semibold mb-4">Shopping Summary</h2>
                <div class="flex justify-between mb-2  text-white">
                    <span class="">Subtotal:</span>
                    <span class="">${{ $data[0] }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="">Shipping:</span>
                    <span class="">${{ $data[0]/10 }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="">Total:</span>
                    <span class="">${{ $data[0] + $data[0]/10 }}</span>
                </div>
                <div class="flex items-center justify-center">
                    <a href="https://wa.me/6282337458131?text=Hi,20%i20%want20%to20%pay%20${{ $data[0] + $data[0]/10 }}." class="mt-4 px-6 py-2 bg-white text-black font-semibold rounded-lg hover:bg-gray-500">Payment Via Admin</a>
                </div>
            </div>

            <!-- Shopping Details Card -->
        </div>
        <div class="bg-[#2E3D2A] shadow-md rounded-md p-6 col-span-2 mt-6 text-white">
            <h2 class="text-lg font-semibold mb-4">Shopping Details</h2>
            @if (count($data) - 1 > 0)
            <ul>
                <li class="flex justify-between mb-2">
                    <span class="">Product Name</span>
                    <span class="">Quantity</span>
                    <span class="">Price</span>
                </li>
                @for ($i = 1; $i <= count($data) - 1; $i++)
                <li class="flex justify-between mb-2">
                    <span class="">{{ $data[$i][0] }}</span>
                    <span class="">{{ $data[$i][1] }}</span>
                    <span class="">${{ $data[$i][2] }}</span>
                    </li>
                @endfor
                </li>
                <!-- Add more shopping details here -->
            </ul>
            @else
                <h1>Tidak ada produk yang dibeli!</h1>
            @endif
        </div>
    </div>
    @endsection
</body>

</html>
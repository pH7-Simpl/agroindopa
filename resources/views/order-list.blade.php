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
    <div class="container mx-auto max-w-4xlp-6">
        <h1 class="text-3xl font-bold mb-6 text-gray-700 mt-6">Order Summary</h1>
        <div class="divide-y divide-gray-200">
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/60" alt="Product 1" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">Product 1</p>
                        <p class="text-gray-500">Price: $10.00</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="decreaseQuantity('quantity1')" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 mr-2">-</button>
                    <input id="quantity1" type="text" value="1" class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity1')" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 ml-2">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total1">10.00</span></p>
            </div>
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/60" alt="Product 2" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">Product 2</p>
                        <p class="text-gray-500">Price: $15.00</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="decreaseQuantity('quantity2')" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 mr-2">-</button>
                    <input id="quantity2" type="text" value="1" class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity2')" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 ml-2">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total2">15.00</span></p>
            </div>
        </div>        
        <p class="text-right text-2xl font-bold text-gray-800">Total: $<span id="grandTotal">25.00</span></p>
        <div class="mt-6 text-right mb-6">
            <a type="button" href="/order-confirmation" class="mt-4 px-6 py-2 bg-[#2E3D2A] text-white font-semibold rounded-lg shadow-md">Payment</a>
        </div>
    </div>

    <script>
        const prices = { quantity1: 10, quantity2: 15 };

        function increaseQuantity(id) {
            const input = document.getElementById(id);
            input.value = parseInt(input.value) + 1;
            updateTotal(id);
        }

        function decreaseQuantity(id) {
            const input = document.getElementById(id);
            if (input.value > 1) {
                input.value = parseInt(input.value) - 1;
                updateTotal(id);
            }
        }

        function updateTotal(id) {
            const input = document.getElementById(id);
            const total = document.getElementById(`total${id.slice(-1)}`);
            total.textContent = (prices[id] * input.value).toFixed(2);
            updateGrandTotal();
        }

        function updateGrandTotal() {
            const total1 = parseFloat(document.getElementById('total1').textContent);
            const total2 = parseFloat(document.getElementById('total2').textContent);
            document.getElementById('grandTotal').textContent = (total1 + total2).toFixed(2);
        }
    </script>
    @endsection
</body>
</html>

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
        <h1 class="text-3xl font-bold mb-6 text-[#76453B] mt-6">Order Summary</h1>
        <div class="divide-y divide-gray-200">
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/Konjac.png" alt="Konjac" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">KONJAC</p>
                        <p class="text-gray-500">Price: $22.00</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="decreaseQuantity('quantity1')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 mr-2">-</button>
                    <input id="quantity1" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity1')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 ml-2">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total1">0.00</span></p>
            </div>
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/Kunyit.jpg" alt="Turmeric" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">TURMERIC</p>
                        <p class="text-gray-500">Price: $21.00</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="decreaseQuantity('quantity2')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 mr-2">-</button>
                    <input id="quantity2" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity2')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 ml-2">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total2">0.00</span></p>
            </div>
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/GiantGingerPowder.jpg" alt="Giant Ginger" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">GIANT GINGER</p>
                        <p class="text-gray-500">Price: $24.00</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="decreaseQuantity('quantity3')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 mr-2">-</button>
                    <input id="quantity3" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity3')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 ml-2">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total3">0.00</span></p>
            </div>
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/Curcuma.jpg" alt="Curcuma" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">CURCUMA</p>
                        <p class="text-gray-500">Price: $18.00</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="decreaseQuantity('quantity4')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 mr-2">-</button>
                    <input id="quantity4" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity4')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 ml-2">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total4">0.00</span></p>
            </div>
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/CoffeeBean.jpg" alt="COFFEE BEAN" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">COFFEE BEAN</p>
                        <p class="text-gray-500">Price: $23.00</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="decreaseQuantity('quantity5')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 mr-2">-</button>
                    <input id="quantity5" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity5')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 ml-2">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total5">0.00</span></p>
            </div>
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/BananaFlour.jpg" alt="Banana Flour" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">BANANA FLOUR</p>
                        <p class="text-gray-500">Price: $17.00</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="decreaseQuantity('quantity6')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 mr-2">-</button>
                    <input id="quantity6" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity6')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 ml-2">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total6">0.00</span></p>
            </div>
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/BananaLeaf.jpg" alt="Banana Leaf" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">BANANA LEAF</p>
                        <p class="text-gray-500">Price: $18.00</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button onclick="decreaseQuantity('quantity7')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 mr-2">-</button>
                    <input id="quantity7" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity7')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 ml-2">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total7">0.00</span></p>
            </div>
        </div>
        <p class="text-right text-2xl font-bold text-gray-800">Total: $<span id="grandTotal">0.00</span></p>
        <div class="mt-6 text-right mb-6">
            <a type="button" href="/order-confirmation"
                class="mt-4 px-6 py-2 bg-[#2E3D2A] text-white font-semibold rounded-lg shadow-md">Payment</a>
        </div>
    </div>

    <script>
        const prices = { quantity1: 22, quantity2: 21, quantity3: 24, quantity4: 18, quantity5: 23,quantity6: 17, quantity7: 18};

        function increaseQuantity(id) {
            const input = document.getElementById(id);
            input.value = parseInt(input.value) + 1;
            updateTotal(id);
        }

        function decreaseQuantity(id) {
            const input = document.getElementById(id);
            if (input.value > 0) {
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
            const total3 = parseFloat(document.getElementById('total3').textContent);
            const total4 = parseFloat(document.getElementById('total4').textContent);
            const total5 = parseFloat(document.getElementById('total5').textContent);
            const total6 = parseFloat(document.getElementById('total6').textContent);
            const total7 = parseFloat(document.getElementById('total7').textContent);
            document.getElementById('grandTotal').textContent = (total1 + total2 + total3 + total4 + total5 + total6 + total7).toFixed(2);
        }
    </script>
    @endsection
</body>

</html>
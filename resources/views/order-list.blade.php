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
    <div class="container mx-auto max-w-4xl p-6">
        <h1 class="text-3xl font-bold mb-6 text-[#76453B] mt-6 text-center">Order Summary</h1>
        <div class="divide-y divide-gray-200">
            <!-- Konjac -->
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/Konjac.png" alt="Konjac" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">KONJAC</p>
                        <p class="text-gray-500">Price: $22.00</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="decreaseQuantity('quantity1')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                    <input id="quantity1" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity1')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total1">0.00</span></p>
            </div>
            <!-- Turmeric -->
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/Kunyit.jpg" alt="Turmeric" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">TURMERIC</p>
                        <p class="text-gray-500">Price: $21.00</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="decreaseQuantity('quantity2')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                    <input id="quantity2" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity2')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total2">0.00</span></p>
            </div>
            <!-- Giant Ginger -->
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/GiantGingerPowder.jpg" alt="Giant Ginger" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">GIANT GINGER</p>
                        <p class="text-gray-500">Price: $24.00</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="decreaseQuantity('quantity3')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                    <input id="quantity3" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity3')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total3">0.00</span></p>
            </div>
            <!-- Curcuma -->
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/Curcuma.jpg" alt="Curcuma" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">CURCUMA</p>
                        <p class="text-gray-500">Price: $18.00</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="decreaseQuantity('quantity4')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                    <input id="quantity4" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity4')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total4">0.00</span></p>
            </div>
            <!-- Coffee Bean -->
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/CoffeeBean.jpg" alt="Coffee Bean" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">COFFEE BEAN</p>
                        <p class="text-gray-500">Price: $23.00</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="decreaseQuantity('quantity5')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                    <input id="quantity5" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity5')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total5">0.00</span></p>
            </div>
            <!-- Banana Flour -->
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/BananaFlour.jpg" alt="Banana Flour" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">BANANA FLOUR</p>
                        <p class="text-gray-500">Price: $17.00</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="decreaseQuantity('quantity6')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                    <input id="quantity6" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity6')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total6">0.00</span></p>
            </div>
            <!-- Banana Leaf -->
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center">
                    <img src="/assets/BananaLeaf.jpg" alt="Banana Leaf" class="w-16 h-16 rounded-lg mr-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-800">BANANA LEAF</p>
                        <p class="text-gray-500">Price: $18.00</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="decreaseQuantity('quantity7')"
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                    <input id="quantity7" type="text" value="0"
                        class="mx-2 w-12 text-center border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button onclick="increaseQuantity('quantity7')"
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">+</button>
                </div>
                <p class="text-lg font-semibold text-gray-800">$<span id="total7">0.00</span></p>
            </div>
        </div>
        <p class="text-right text-2xl font-bold text-gray-800">Total: $<span id="grandTotal">0.00</span></p>
        <div class="mt-6 text-right mb-6">
            <form method="POST" action="{{ route('order-confirmation') }}" name="orderForm">
                @csrf {{-- Laravel security token --}}
                <input type="hidden" name="orderData" id="orderData" value="[]">
                <button type="submit" class="mt-4 px-6 py-2 bg-[#2E3D2A] text-white font-semibold rounded-lg shadow-md"
                    id="paymentButton">Payment</button>
            </form>
        </div>
    </div>
    <script>
        let grandTotal = 0;
        let total1 = parseFloat(document.getElementById('total1').textContent);
        let total2 = parseFloat(document.getElementById('total2').textContent);
        let total3 = parseFloat(document.getElementById('total3').textContent);
        let total4 = parseFloat(document.getElementById('total4').textContent);
        let total5 = parseFloat(document.getElementById('total5').textContent);
        let total6 = parseFloat(document.getElementById('total6').textContent);
        let total7 = parseFloat(document.getElementById('total7').textContent);
        const prices = {
            quantity1: 22,
            quantity2: 21,
            quantity3: 24,
            quantity4: 18,
            quantity5: 23,
            quantity6: 17,
            quantity7: 18
        };

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
            total1 = parseFloat(document.getElementById('total1').textContent);
            total2 = parseFloat(document.getElementById('total2').textContent);
            total3 = parseFloat(document.getElementById('total3').textContent);
            total4 = parseFloat(document.getElementById('total4').textContent);
            total5 = parseFloat(document.getElementById('total5').textContent);
            total6 = parseFloat(document.getElementById('total6').textContent);
            total7 = parseFloat(document.getElementById('total7').textContent);
            document.getElementById('grandTotal').textContent = (total1 + total2 + total3 + total4 + total5 + total6 +
                total7).toFixed(2);
            grandTotal = parseFloat((total1 + total2 + total3 + total4 + total5 + total6 + total7).toFixed(2));
        }

        async function addData(event) {
            event.preventDefault();

            const orderDataElement = document.getElementById('orderData');
            let orderData = JSON.parse(orderDataElement.value);
            orderData = [
                grandTotal,
                ["Konjac", total1 / prices.quantity1, total1],
                ["Turmeric", total2 / prices.quantity2, total2],
                ["Giant Ginger", total3 / prices.quantity3, total3],
                ["Curcuma", total4 / prices.quantity4, total4],
                ["Coffee Bean", total5 / prices.quantity5, total5],
                ["Banana Flour", total6 / prices.quantity6, total6],
                ["Banana Leaf", total7 / prices.quantity7, total7]
            ];

            const encodedData = JSON.stringify(orderData);
            orderDataElement.value = encodedData;
            document.forms["orderForm"].submit();
        }

        document.getElementById("paymentButton").addEventListener("click", addData);
    </script>
    @endsection
</body>

</html>
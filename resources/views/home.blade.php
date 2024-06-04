@extends('layout')

<!DOCTYPE html>
<html lang="en">

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

<body class="bg-[#F8FAE5]">
    @section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold text-center mb-8 text-[#76453B]">OUR PRODUCTS</h1>
        <div class="flex ">
            <div class="mx-auto flex w-96 flex-col justify-center bg-[#2E3D2A] rounded-2xl">
                <img class="aspect-video h-full w-96 rounded-t-2xl object-cover object-center"
                    src="/assets/Konjac.png" />
                <div class="px-6 py-4">
                    <h1 class="text-3xl font-medium text-white pb-2">KONJAC</h1>
                    <p class="text-sm tracking-tight font-light text-white leading-6">A plant native to East Asia,
                        offers a low-calorie, high-fiber alternative for healthy eating.</p>
                    <div class="flex items-center mt-4 space-x-6">
                        <h1 class="text-xl font-medium text-white">22$/KG</h1>
                        <!-- <button class="align-middle select-none font-bold text-center text-sm py-1 px-4 border-2 border-white text-white rounded-full">ADD</button> -->
                    </div>
                </div>
            </div>


            <div class="mx-auto flex w-96 flex-col justify-center bg-[#2E3D2A] rounded-2xl">
                <img class="aspect-video h-full w-96 rounded-t-2xl object-cover object-center"
                    src="/assets/Kunyit.jpg" />
                <div class="px-6 py-4">
                    <h1 class="text-3xl font-medium text-white pb-2">TURMERIC</h1>
                    <p class="text-sm tracking-tight font-light text-white leading-6">Prized for its vibrant color and potent health benefits, is a globally cherished spice.</p>
                    <div class="flex items-center mt-4 space-x-6">
                        <h1 class="text-xl font-medium text-white">21$/KG</h1>
                    </div>
                </div>
            </div>

            <div class="mx-auto flex w-96 flex-col justify-center bg-[#2E3D2A] rounded-2xl">
                <img class="aspect-video h-full w-96 rounded-t-2xl object-cover object-center"
                    src="/assets/GiantGingerPowder.jpg" />
                <div class="px-6 py-4">
                    <h1 class="text-3xl font-medium text-white pb-2">GIANT GINGER</h1>
                    <p class="text-sm tracking-tight font-light text-white leading-6">Prized for its robust flavor and impressive size, adds a punch to dishes and health remedies alike.</p>
                    <div class="flex items-center mt-4 space-x-6">
                        <h1 class="text-xl font-medium text-white">24$/KG</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex mt-12">
            <div class="mx-auto flex w-96 flex-col justify-center bg-[#2E3D2A] rounded-2xl">
                <img class="aspect-video h-full w-96 rounded-t-2xl object-cover object-center"
                    src="/assets/Curcuma.jpg" />
                <div class="px-6 py-4">
                    <h1 class="text-3xl font-medium text-white pb-2">CURCUMA</h1>
                    <p class="text-sm tracking-tight font-light text-white leading-6">Prized for its vibrant color and potent anti-inflammatory properties, is a staple spice in cuisines worldwide.</p>
                    <div class="flex items-center mt-4 space-x-6">
                        <h1 class="text-xl font-medium text-white">18$/KG</h1>
                    </div>
                </div>
            </div>


            <div class="mx-auto flex w-96 flex-col justify-center bg-[#2E3D2A] rounded-2xl">
                <img class="aspect-video h-full w-96 rounded-t-2xl object-cover object-center"
                    src="/assets/CoffeeBean.jpg" />
                <div class="px-6 py-4">
                    <h1 class="text-3xl font-medium text-white pb-2">COFFEE BEAN</h1>
                    <p class="text-sm tracking-tight font-light text-white leading-6">Renowned for their rich flavor and unique aroma, captivate coffee enthusiasts worldwide.</p>
                    <div class="flex items-center mt-4 space-x-6">
                        <h1 class="text-xl font-medium text-white">23$/KG</h1>
                    </div>
                </div>
            </div>

            <div class="mx-auto flex w-96 flex-col justify-center bg-[#2E3D2A] rounded-2xl">
                <img class="aspect-video h-full w-96 rounded-t-2xl object-cover object-center"
                    src="/assets/BananaFlour.jpg" />
                <div class="px-6 py-4">
                    <h1 class="text-3xl font-medium text-white pb-2">BANANA FLOUR</h1>
                    <p class="text-sm tracking-tight font-light text-white leading-6">Derived from bananas, provides a gluten-free and nutrient-rich alternative for baking and cooking purposes.</p>
                    <div class="flex items-center mt-4 space-x-6">
                        <h1 class="text-xl font-medium text-white">17$/KG</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mt-12">
            <div class="mx-auto flex w-96 flex-col justify-center bg-[#2E3D2A] rounded-2xl">
                <img class="aspect-video h-full w-96 rounded-t-2xl object-cover object-center"
                    src="/assets/BananaLeaf.jpg" />
                <div class="px-6 py-4">
                    <h1 class="text-3xl font-medium text-white pb-2">BANANA LEAF</h1>
                    <p class="text-sm tracking-tight font-light text-white leading-6">A versatile and eco-friendly packaging option for diverse culinary needs.</p>
                    <div class="flex items-center mt-4 space-x-6">
                        <h1 class="text-xl font-medium text-white">18$/KG</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex item-center justify-center mt-12">
            <a
                class="align-middle select-none font-bold text-center text-xl py-1 px-4 border-2 border-[#2E3D2A] text-[#2E3D2A] rounded-full"
                href="/order-list">CHECKOUT</a>
        </div>

    </div>
    @endsection
</body>

</html>
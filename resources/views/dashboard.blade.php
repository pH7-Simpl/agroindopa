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
    <div class="container mx-auto my-10">
        <h1 class="text-4xl font-bold text-center mb-8 text-[#76453B]">DASHBOARD</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="bg-[#2E3D2A] p-5 rounded-lg shadow text-white">
            <h2 class="text-2xl font-semibold mb-4">Your Order:</h2>
            <table class="min-w-full bg-[#2E3D2A]">
              <thead class="bg-[#76453B]">
                <tr>
                  <th class="py-2 px-4 text-left">Product</th>
                  <th class="py-2 px-4 text-left">Quantity</th>
                  <th class="py-2 px-4 text-left">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-2 px-4 border-b">Produk A</td>
                  <td class="py-2 px-4 border-b">2</td>
                  <td class="py-2 px-4 border-b">$ 25</td>
                </tr>
                <tr>
                  <td class="py-2 px-4 border-b">Produk B</td>
                  <td class="py-2 px-4 border-b">1</td>
                  <td class="py-2 px-4 border-b">$ 25</td>
                </tr>
                <!-- Tambahkan baris pesanan lainnya di sini -->
                <tr>
                  <td colspan="2" class="py-2 px-4 text-right font-bold">Total</td>
                  <td class="py-2 px-4 border-b font-bold">$ 50</td>
                </tr>
              </tbody>
            </table>
          </div>
    
          <!-- Order Location -->
          <div class="bg-[#2E3D2A] p-5 rounded-lg shadow text-white">
            <h2 class="text-2xl font-semibold mb-4">Order Location</h2>
            <div class="p-4 rounded">
              <p>Pelacakan Barang:</p>
              <ul class="list-disc list-inside">
                <li>Pesanan diproses</li>
                <li>Sedang dikirim</li>
                <li>Pesanan sampai</li>
                <!-- Tambahkan status pelacakan lainnya di sini -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      @endsection
</body>
</html>

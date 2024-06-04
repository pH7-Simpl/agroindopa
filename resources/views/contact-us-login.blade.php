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
    <style>
        .card {
            width: 16rem;
            /* 64 (w-64) * 4 (rem) = 256px */
            height: 16rem;
            /* 64 (h-64) * 4 (rem) = 256px */
            padding: 1rem;
            /* 4 (p-4) * 4 (rem) = 16px */
            background-color: white;
            border: 1px solid #e5e7eb;
            /* gray-200 */
            border-radius: 0.5rem;
            /* rounded-lg */
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            /* shadow */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
            /* Add transition for smooth hover effect */

        }

        .card:hover {
            background-color: #B1C381;
            /* Light green color similar to image (adjust if needed) */
            cursor: pointer;
            /* Change cursor to pointer on hover */
        }

        /* Optional: Style the icon within the card */
        .card i {
            font-size: 64px;
            /* Adjust font size as needed */
            color: #000;
            /* White color for the icon */
        }
    </style>
</head>

<body class="bg-[#F8FAE5]">
    @section('content')
    <div class="container mx-auto max-w-4xlp-6">
        <h1 class="text-4xl font-bold text-center mb-4 mt-6 text-[#76453B]">CONTACT US</h1>
        <h3 class="text-l font-bold text-center mb-8 text-[#76453B]">HERE'S OUR LOCATION</h1>
            <a href="https://maps.app.goo.gl/qtBsRjnWUpbgLAEi8" class="flex justify-center items-center my-6">
                <img src="/assets/Maps3.png" alt="Agroindo Address" style="width: 70%">
            </a>
            <div class="flex gap-6 justify-center items-center mb-6">
                <div class="card">
                    <div class="gap-6 flex flex-col items-center">
                        <i data-lucide="mail" class="size-16"></i>
                        <div class="flex flex-col items-center">
                            <h5 class="mb-1 text-xl font-medium text-black dark:text-black">Email</h5>
                            <span class="text-sm text-black dark:text-black">agroindomlg@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="gap-6 flex flex-col items-center">
                        <i class="fa fa-telegram" style="font-size:64px"></i>
                        <div class="flex flex-col items-center">
                            <h5 class="mb-1 text-xl font-medium text-black dark:text-black">Telegram</h5>
                            <span class="text-sm text-black dark:text-black">+62 823-3745-8131</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="gap-6 flex flex-col items-center">
                        <i class="fa fa-instagram" style="font-size:64px"></i>
                        <div class="flex flex-col items-center">
                            <h5 class="mb-1 text-xl font-medium text-black dark:text-black">Instagram</h5>
                            <span class="text-sm text-black dark:text-black">@agroindo.id</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="gap-6 flex flex-col items-center">
                        <i class="fa fa-whatsapp" style="font-size:64px"></i>
                        <div class="flex flex-col items-center">
                            <h5 class="mb-1 text-xl font-medium text-black dark:text-black">Whatsapp</h5>
                            <span class="text-sm text-black dark:text-black">+62 823-3745-8131</span>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    @endsection
</body>

</html>
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
    <style>
        .back-button {
            position: absolute;
            top: 1rem;
            left: 1rem;
            padding: 0.5rem 1rem;
            background-color: #43766C;
            /* Match register/login button color */
            color: #fff;
            /* White text for better contrast */
            text-decoration: none;
            border: none;
            /* Remove border */
            border-radius: 5px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-button:hover {
            opacity: 0.8;
            /* Slight opacity change on hover */
        }

        .back-button i {
            margin-right: 5px;
            /* Add spacing between icon and text */
        }

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

<body class="font-sans text-gray-900 antialiased">
    <div class="relative min-h-screen bg-image-landing bg-cover bg-center flex flex-col">
        <div class="flex w-full sm:w-1/2 h-full absolute items-center justify-left ml-12">
            <img src="/assets/AgroIndoText.svg" alt="AgroIndoText" style="width: 50%">
            <a href="/" class="back-button">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>
        <div id="box"
            class="bg-[#F8FAE5] w-full sm:w-1/2 h-full p-6 opacity-90 absolute top-0 right-0 sm:rounded-bl-lg flex flex-col items-center justify-center space-y-6">
            <div class="flex flex-col items-center space-y-6">
                <div class="space-x-6 flex items-center">
                    <a href="/register"
                        class="align-middle select-none font-bold text-center text-xl py-1 px-4 border-2 border-[#43766C] text-[#43766C] hover:opacity-75 active:opacity-[0.85] rounded-full">Register</a>
                    <a href="/login"
                        class="align-middle select-none font-bold text-center text-xl py-1 px-4 border-2 border-[#43766C] text-[#43766C] hover:opacity-75 active:opacity-[0.85] rounded-full">Login</a>
                </div>
                <div class="flex gap-6">
                    <a href="mailto:agroindomlg@gmail.com?
                            &subject=Buying Something
                            &body=I want to buy something." class="card">
                        <div class="gap-6 flex flex-col items-center">
                            <i data-lucide="mail" class="size-16"></i>
                            <div class="flex flex-col items-center">
                                <h5 class="mb-1 text-xl font-medium text-black dark:text-black">Email</h5>
                                <span class="text-sm text-black dark:text-black">agroindomlg@gmail.com</span>
                            </div>
                        </div>
                    </a>
                    <a href="https://t.me/6282337458131?text=Hi,20%i20%want20%to20%buy." class="card">
                        <div class="gap-6 flex flex-col items-center">
                            <i class="fa fa-telegram" style="font-size:64px"></i>
                            <div class="flex flex-col items-center">
                                <h5 class="mb-1 text-xl font-medium text-black dark:text-black">Telegram</h5>
                                <span class="text-sm text-black dark:text-black">+62 823-3745-8131</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex gap-6">
                    <a href="https://instagram.com/agroindo.id" class="card">
                        <div class="gap-6 flex flex-col items-center">
                            <i class="fa fa-instagram" style="font-size:64px"></i>
                            <div class="flex flex-col items-center">
                                <h5 class="mb-1 text-xl font-medium text-black dark:text-black">Instagram</h5>
                                <span class="text-sm text-black dark:text-black">@agroindo.id</span>
                            </div>
                        </div>
                    </a>
                    <a href="https://wa.me/6282337458131?text=Hi,20%i20%want20%to20%buy." class="card">
                        <div class="gap-6 flex flex-col items-center">
                            <i class="fa fa-whatsapp" style="font-size:64px"></i>
                            <div class="flex flex-col items-center">
                                <h5 class="mb-1 text-xl font-medium text-black dark:text-black">Whatsapp</h5>
                                <span class="text-sm text-black dark:text-black">+62 823-3745-8131</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>
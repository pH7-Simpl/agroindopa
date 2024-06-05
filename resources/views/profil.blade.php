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
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">My Profile</h1>

        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full md:w-1/3">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="rounded-lg mb-4">

                <a href="/edit-profile"
                    class="inline-block px-4 py-2 bg-[#2E3D2A] text-white font-semibold rounded-lg shadow-md hover:bg-blue-700">Edit
                    Profile</a>
            </div>

            <div class="w-full md:w-2/3 space-y-2">
                <div><strong>Name:</strong> {{ Auth::user()->name }}</div>
                <div><strong>Email:</strong> {{ Auth::user()->email }}</div>
                <div><strong>Address:</strong> {{ Auth::user()->address }}</div>
            </div>
            <div class="w-full md:w-1/3">
                <a href="/delete-user"
                    class="inline-block px-4 py-2 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700"
                    onclick="showDeleteConfirmation()">Delete User</a>
            </div>
        </div>

        <!-- Reporting Form -->
        <div class="mt-8">
            <h1 class="text-3xl font-bold mb-6">Report an Issue</h1>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M14.348 14.849l-3.998-3.999 3.998-3.999L13.636 6l-3.998 3.999L5.64 6l-.707.707 3.998 3.999-3.998 3.999.707.707 3.998-3.999 3.998 3.999z" />
                        </svg>
                    </span>
                </div>
            @endif

            <form action="{{ route('report.store') }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" name="name" id="name" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" name="email" id="email" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
                    <textarea name="message" id="message" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="mb-4">
                    <button type="submit"
                        class="bg-[#2E3D2A] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit
                        Report</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
</body>

</html>
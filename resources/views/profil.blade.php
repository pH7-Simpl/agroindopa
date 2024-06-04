@extends('layout')

@section('content')
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
        .profile-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-img {
            border-radius: 50%;
            max-width: 150px;
        }

        .profile-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2E3D2A;
            color: #fff;
            font-weight: 600;
            border-radius: 5px;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .profile-btn:hover {
            background-color: #1f2a1c;
        }

        .delete-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e3342f;
            color: #fff;
            font-weight: 600;
            border-radius: 5px;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .delete-btn:hover {
            background-color: #cc1f1a;
        }

        .profile-info ul {
            list-style-type: none;
            padding: 0;
        }

        .profile-info ul li {
            padding: 5px 0;
            font-size: 18px;
        }

        .profile-info ul li strong {
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-[#F8FAE5]">
    <div class="container mx-auto px-4 py-8">
        <div class="profile-container">
            <h1 class="text-3xl font-bold mb-6">My Profile</h1>
            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/3 text-center md:text-left">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="profile-img mb-4 mx-auto md:mx-0">
                    <a href="/edit-profile" class="profile-btn">Edit Profile</a>
                </div>
                <div class="w-full md:w-2/3 profile-info">
                    <ul>
                        <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
                        <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                    </ul>
                </div>
            </div>
            <div class="mt-6 text-center md:text-left">
                <a href="/delete-user" class="delete-btn" onclick="return confirm('Are you sure you want to delete your account?');">Delete User</a>
            </div>
        </div>
    </div>
</body>

</html>
@endsection

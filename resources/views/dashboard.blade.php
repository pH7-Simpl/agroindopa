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
        .report-container {
            background-color: #2E3D2A;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 24px;
            color: white;
            margin-top: 24px;
            text-align: center;
        }

        .report-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .report-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 8px;
            border-radius: 4px;
        }

        .report-label {
            font-size: 1.25rem;
        }

        .report-data {
            display: block;
            margin-top: 4px;
        }
    </style>
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
                                <td class="py-2 px-4 border-b">KONJAC</td>
                                <td class="py-2 px-4 border-b">0</td>
                                <td class="py-2 px-4 border-b">$0</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">TURMERIC</td>
                                <td class="py-2 px-4 border-b">0</td>
                                <td class="py-2 px-4 border-b">$0</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">GIANT GINGER</td>
                                <td class="py-2 px-4 border-b">0</td>
                                <td class="py-2 px-4 border-b">$0</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">CURCUMA</td>
                                <td class="py-2 px-4 border-b">0</td>
                                <td class="py-2 px-4 border-b">$0</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">COFFEE BEAN</td>
                                <td class="py-2 px-4 border-b">0</td>
                                <td class="py-2 px-4 border-b">$0</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">BANANA FLOUR</td>
                                <td class="py-2 px-4 border-b">0</td>
                                <td class="py-2 px-4 border-b">$0</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 border-b">BANANA LEAF</td>
                                <td class="py-2 px-4 border-b">0</td>
                                <td class="py-2 px-4 border-b">$0</td>
                            </tr>
                            <!-- Tambahkan baris pesanan lainnya di sini -->
                            <tr>
                                <td colspan="2" class="py-2 px-4 text-right font-bold">Total</td>
                                <td class="py-2 px-4 border-b font-bold">$0</td>
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

            <div class="report-container">
                <h2 class="report-title">Your Report</h2>
                <div class="report-content">
                  @if (count($reports) > 0)
                    <ul>
                        <li>
                            <span class="report-label">Created At</span>
                        </li>
                        @foreach ($reports as $report)
                            <li>
                                <span class="report-data">{{ $report->created_at->format('Y-m-d H:i:s') }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <ul>
                        <li>
                            <span class="report-label">Report By</span>
                        </li>
                        @foreach ($reports as $report)
                            <li>
                                <span class="report-data">{{ $report->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <ul>
                        <li>
                            <span class="report-label">Message</span>
                        </li>
                        @foreach ($reports as $report)
                            <li>
                                <span class="report-data">{{ $report->message }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <ul>
                        <li>
                            <span class="report-label">Action</span>
                        </li>
                        @foreach ($reports as $report)
                            <li>
                                <form action="{{ url('report/' . $report->id) }}" method="DELETE">
                                    @csrf
                                    <span class="report-data"><button type="submit"
                                            style="background-color: black; border-radius: 5px; padding: 0px 10px 0px 10px">Delete</button></span>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                  @else
                  <p>Anda tidak punya report untuk ditampilkan.</p>
                  @endif
                </div>
            </div>
        </div>
    @endsection
</body>

</html>

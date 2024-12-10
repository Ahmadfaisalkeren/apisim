<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items Report</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900 font-[Poppins]">
    <div class="bg-gray-800 text-white text-center py-4">
        <h1 class="text-3xl font-bold">Items Report</h1>
        <p class="text-sm mt-1">Generated on {{ now()->format('Y-m-d H:i:s') }}</p>
    </div>

    <div class="">
        <table class="table-auto w-full border-collapse border border-gray-300 shadow-lg rounded-lg bg-white">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b border-gray-300">No</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b border-gray-300 w-32">Item Code</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b border-gray-300">Name</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b border-gray-300">Image</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b border-gray-300">QR Code</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b border-gray-300">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="{{ $loop->odd ? 'bg-white' : 'bg-gray-100' }}">
                        <td class="px-4 py-2 text-sm border border-gray-300 text-center">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 text-xs font-medium border border-gray-300">
                            <span class="bg-green-200 text-green-900 px-2 py-1 rounded inline-block">
                                {{ $item->item_code }}
                            </span>
                        </td>
                        <td class="px-4 py-2 text-sm border border-gray-300">{{ $item->name }}</td>
                        <td class="px-4 py-2 border border-gray-300">
                            <img src="{{ public_path('storage/' . $item->image) }}" alt="Item Image"
                                class="w-16 h-16 object-cover mx-auto rounded-md shadow">
                        </td>
                        <td class="px-4 py-2 border border-gray-300">
                            <img src="{{ public_path('storage/' . $item->qrcode) }}" alt="QR Code"
                                class="w-16 h-16 object-cover mx-auto shadow">
                        </td>
                        <td class="px-4 py-2 text-sm border border-gray-300 text-center">{{ $item->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-center text-gray-600 text-sm mt-8">
        <p>Inventory Management System - © {{ now()->year }}</p>
    </div>
</body>

</html>

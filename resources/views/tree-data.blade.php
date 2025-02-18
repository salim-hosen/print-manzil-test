<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>
<body class="p-6 bg-gray-100">
    <div class="max-w-md mx-auto bg-white p-4 shadow-lg rounded-lg">
        <ul class="space-y-2">
            <li class="pl-2 font-semibold">
                <h2 class="text-lg font-bold mb-4">{{ $store->store_name }}</h2>
            </li>
            <ul class="pl-6 space-y-1">
                @foreach ($categories as $category)
                    <li class="pl-2 font-semibold">{{ $category->category_name }}</li>
                    <ul class="pl-6 space-y-1">
                    @foreach ($category->products as $product)
                        <li class="pl-2">{{ $product->product_name }}</li>
                    @endforeach
                    </ul>
                @endforeach

            </ul>
        </ul>
    </div>
</body>

</html>


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
    <body class="h-screen bg-gray-100">
        <div class="flex h-full">
            <!-- Sidebar -->
            <aside class="w-64 bg-white text-white p-5">
                <h2 class="text-xl font-bold mb-4">Dashboard</h2>
                <nav>
                    <ul class="space-y-3">
                        <li><a href="{{ route('stores.index') }}" class="@if(request()->routeIs("stores.*")) text-white bg-indigo-500 hover:bg-indigo-600 @else hover:bg-zinc-200 @endif text-gray-500 block p-2 px-3 rounded">Stores</a></li>
                        <li><a href="{{ route('categories.index') }}" class="@if(request()->routeIs("categories.*")) text-white bg-indigo-500 hover:bg-indigo-600 @else hover:bg-zinc-200 @endif text-gray-500 block p-2 px-3 rounded">Categories</a></li>
                        <li><a href="{{ route('products.index') }}" class="@if(request()->routeIs("products.*")) text-white bg-indigo-500 hover:bg-indigo-600 @else hover:bg-zinc-200 @endif text-gray-500 block p-2 px-3 rounded">Products</a></li>
                        <li>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                             <a href="route('logout')"
                             onclick="event.preventDefault();
                                         this.closest('form').submit();" class="hover:bg-zinc-200 text-gray-500 block p-2 px-3 rounded">Logout</a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-6">
                @yield("content")
            </main>
        </div>

    </body>
</html>

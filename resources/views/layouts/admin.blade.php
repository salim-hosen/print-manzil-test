
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

        <main class="flex-1 p-6">
            <div class="flex items-center justify-between mb-1">
                <h2></h2>
                 <!-- Authentication -->
                 <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="text-red-600 font-bold" href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                         {{ __('Log Out') }}
                 </a>
                </form>
            </div>
            @yield("content")
        </main>
    </body>
</html>

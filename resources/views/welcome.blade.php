<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ... (tu CSS existente) ... */
        </style>
    @endif
</head>
<body class="font-sans antialiased bg-gray-100">

    <header class="py-5 bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-lg font-bold text-gray-800">CRUD PERSONA - TAILWIND CSS - JETSTREAM</div>
            @if (Route::has('login'))
                <nav class="flex space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-gray-600 hover:bg-gray-200 transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-gray-600 hover:bg-gray-200 transition">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-gray-600 hover:bg-gray-200 transition">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <!-- Mensaje centrado -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center p-6 bg-white shadow-lg rounded-lg">
            <h1 class="text-2xl font-semibold text-gray-800">Agenda Personal INF-513 CC</h1>
            <p class="mt-2 text-gray-600">GRUPO02 CC - JHON JAIRO LLANOS ROMERO</p>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex">
        <!-- Sidebar Navigation (Hidden on mobile) -->
        <div class="hidden sm:block w-64 bg-white shadow-md fixed h-screen"> 
            @include('layouts.navigation')
        </div>

        <div class="flex-1 ml-0 sm:ml-64">
            <!-- Page Heading with Header on Left and Hamburger on Right -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                        <!-- Header (Left) -->
                        <div class="text-left">
                            {{ $header }}
                        </div>

                        <!-- Mobile Hamburger Menu (Right) -->
                        <div x-data="{ open: false }" class="sm:hidden">
                            <button @click="open = !open" class="text-gray-500 p-4">
                                <!-- Hamburger icon for mobile -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                                </svg>
                            </button>

                            <!-- Slide-out sidebar for mobile -->
                            <div :class="{'block': open, 'hidden': !open}" class="hidden bg-white w-64 shadow-md absolute top-0 left-0 h-screen z-50">
                                @include('layouts.navigation')
                            </div>
                        </div>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>

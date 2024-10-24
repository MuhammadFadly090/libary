<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to SugarSmart</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #FDF6E3; /* Soft background color */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            padding: 2rem;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            color: #FF2D20; /* Main accent color */
            margin-bottom: 1.5rem;
        }

        a {
            text-decoration: none;
            color: #FF2D20;
            padding: 0.5rem 1rem;
            border: 2px solid #FF2D20;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #FF2D20;
            color: white;
        }

        nav a {
            margin: 0 0.5rem;
        }

        /* Logo styling */
        .logo {
            width: 150px; /* Adjust width to make logo larger */
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('Gambar/Logo.png') }}" alt="SugarSmart Logo" class="logo">
        <h1>Welcome to SugarSmart</h1>
        <p>Empower your practice with SugarSmart to enhance diabetes identification and care!</p>

        <!-- Navigation -->
        @if (Route::has('login'))
            <nav>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Create</a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</body>
</html>

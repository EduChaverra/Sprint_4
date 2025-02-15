<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>GC Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7fafc;
        }
        .navbar {
            z-index: 50;
        }
        main {
            padding-bottom: 4rem;
        }
        .extra-margin-top {
            margin-top: 100px;
        }
        a {
            text-decoration: none;
        }
        a:hover {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div id="app">
    <nav class="fixed top-0 left-0 w-full bg-white shadow navbar">
        <div class="container mx-auto px-6 py-8 flex items-center"> 
            <div class="flex-grow">
                <div class="text-xl font-semibold text-gray-700">
                    <a class="text-gray-800 hover:text-gray-700" href="{{ url('/') }}">
                        GymClubs Connect
                    </a>
                </div>
            </div>
            <div class="flex flex-grow justify-left space-x-32">
                <a href="/clubs" class="text-gray-700 hover:text-gray-900 text-lg">Clubs</a>
                <a href="/gimnastas" class="text-gray-700 hover:text-gray-900 text-lg">Gimnastas</a>
                <a href="/competiciones" class="text-gray-700 hover:text-gray-900 text-lg">Competiciones</a>
            </div>
        </div>
    </nav>

        <main class="@yield('extra-margin-top')">
            @yield('content')
        </main>

        <footer class="fixed bottom-0 left-0 w-full py-4 bg-gray-200 border-t border-gray-300">
            <div class="container mx-auto px-4 flex justify-center items-center">
                <span>&copy; 2024 GymClubs Connect. Todos los derechos reservados.</span>
            </div>
        </footer>
    </div>
</body>
</html>
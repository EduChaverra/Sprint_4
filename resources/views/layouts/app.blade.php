<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GC Connect</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .min-h-screen {
            display: flex;
            flex-direction: column;
            min-height: 300vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div id="app">
        <nav class="bg-white shadow">
            <div class="container mx-auto px-6 py-3">
                <div class="flex justify-between items-center">
                    <div class="text-xl font-semibold text-gray-700">
                        <a class="text-gray-800 hover:text-gray-700" href="{{ url('/') }}">
                            GymClubs Connect
                        </a>
                    </div>
                    <div class="flex space-x-4">
                        <a href="/clubs" class="text-gray-800 hover:text-gray-700">Clubs</a>
                        <a href="/gimnastas" class="text-gray-800 hover:text-gray-700">Gimnastas</a>
                        <a href="/competiciones" class="text-gray-800 hover:text-gray-700">Competiciones</a>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-white shadow mt-8">
            <div class="container mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <div class="text-gray-600">
                        &copy; 2024 GymClubs Connect. Todos los derechos reservados.
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-gray-900">Políticas de privacidad</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Términos del servicio</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
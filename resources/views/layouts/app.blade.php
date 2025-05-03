<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi App')</title>
    @vite('resources/css/app.css') {{-- Si usas Tailwind --}}
</head>
<body class="bg-gray-100 text-gray-900">

    @include('partials.navbar')

    <div class="flex">
        {{-- @include('partials.sidebar') --}}

        <main class="flex-1 p-4">
            @yield('content')
        </main>
    </div>

    {{-- @include('partials.footer') --}}

    @vite('resources/js/app.js') {{-- Si usas JS --}}
</body>
</html>

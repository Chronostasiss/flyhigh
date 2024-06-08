<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script src="{{ asset('node_modules/alpinejs/dist/alpine.js') }}"></script>
</head>
<body>
    @if(session('alert'))
    <script>
    alert('{{ session('alert') }}');
    </script>
    @endif
    @include('components.navbar.navbar')
    <div class="min-h-[55vh]">
        @yield('content')
    </div>
    @include('components.footer.footer')
</body>
</html>

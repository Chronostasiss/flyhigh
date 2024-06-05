<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking System</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.navbar.navbar')
    <div>
        @include('components.hero.hero')
        @include('components.about.about')
        @include('components.features.features')
        @include('components.about.gallery')
        @include('components.faq.faq')
        @include('components.footer.footer')
    </div>
</body>
</html>

<!-- http://127.0.0.1:8000/ -->
<!-- http://127.0.0.1:5500/ -->
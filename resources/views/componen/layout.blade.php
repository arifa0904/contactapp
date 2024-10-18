<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Landing Page')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-pink-100 via-pink-200 to-pink-300 min-h-screen flex flex-col">

    <!-- Header -->
    @include('componen.header')

    <!-- Content -->
    <div class="flex-grow flex items-center justify-center">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('componen.footer')

</body>
</html>

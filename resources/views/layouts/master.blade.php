<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')


    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : '' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myStyle.css') }}">
</head>

<body class="font-sans gray">

    <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
       @include('admin.sidebar')
        <main class=" w-full">

         @include('admin.admin-navbar')

            {{ $slot }}
        </main>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>

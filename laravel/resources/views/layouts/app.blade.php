<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
    <!-- LINK: Font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- LINK: Style CSS  -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document-@yield('title')</title>
</head>
<body>
    
    {{-- INCLUDE HEADER --}}
    @include('partials.header')
    {{-- FINE INCLUDE HEADER --}}
    

    {{-- MAIN VARIABILE --}}
    <main>
        @yield('content-main')
    </main>
    {{-- FINE MAIN VARIABILE --}}

    {{-- INCLUDE FOOTER --}}
    @include('partials.footer')
    {{-- FINE INCLUDE FOOTER --}}

    {{-- LINK: Collegamento JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>
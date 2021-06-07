{{-- Default For Admin --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sell Many Varians Cars ">
    <meta name="author" content="DeDealerCars">
    <meta name="generator" content="Hugo 0.82.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $webname }}</title>

    <!-- style css -->
    @stack('before-style')
    @include('includes-website.style')
    @stack('after-style')

</head>

<body>

    @include('includes-website.header')

    <div>
        @stack('before-content-website')
        @yield('content-website')
        @stack('after-content-website')
    </div>


    @include('includes-website.footer')

    @stack('before-script')
    @include('includes-website.script')
    @stack('after-script')

</body>

</html>

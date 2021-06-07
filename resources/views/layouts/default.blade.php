{{-- Default For Admin --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DeDealerCars">
    <meta name="generator" content="Hugo 0.82.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'De Dealer') }}</title>

    <!-- style css -->
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body>

    @include('includes.navbar')

    <div class="container-fluid">
        <div class="row">

            @include('includes.sidebar')

            @stack('before-content')
            @yield('content')
            @stack('after-content')
        </div>
    </div>


    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>

</html>

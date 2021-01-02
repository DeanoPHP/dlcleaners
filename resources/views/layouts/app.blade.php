<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Domestic and commercial cleaning company, we do end of tenancy cleaning, after build cleaning, driveway cleaning, carpet cleaning in Yatton, Clevedon, Congresbury, Portishead, Avonmouth, Shirehampton, Bristol, Gloucester, Somerset, North Somerset and serounding areas.">
    <meta name="author" content="Dean Lark">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div class="container-fluid m-0 p-0">
        @include('inc.nav')
    <div class="container" style="min-height:1800px; margin-bottom:20px;">
        @yield('content')
        </div>
        @include('inc.footer')
    </div>
</body>
</html>

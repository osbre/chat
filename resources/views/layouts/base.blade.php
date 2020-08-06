<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') &dash; {{ config('app.name') }} @else {{ config('app.name') }} @endif</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,600">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/turbolinks@5.2.0/dist/turbolinks.min.js" defer></script>
</head>
<body>

<div class="font-sans antialiased h-screen flex">
    @yield('body')

    {{--TODO: move all scripts to app.js and compile it--}}
    <script src="https://cdn.jsdelivr.net/gh/ryangjchandler/spruce@0.x.x/dist/spruce.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</div>

</body>
</html>

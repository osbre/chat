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

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/ryangjchandler/spruce@0.x.x/dist/spruce.umd.js" defer></script>
</head>
<body>
<div class="font-sans antialiased h-screen flex">
    <!-- Sidebar / channel list -->
    <div class="bg-indigo-900 text-purple-200 flex-none w-24 p-6 hidden md:block">
        @foreach(auth()->user()->groups as $group)
            <div class="cursor-pointer mb-4">
                <a href="{{ route('groups.show', $group) }}" class="bg-indigo-200 opacity-25 h-12 w-12 flex items-center justify-center text-black text-2xl font-semibold rounded-lg mb-1 overflow-hidden">
                    {{ $group->letter }}
                </a>
            </div>
        @endforeach
        @include('groups._new_modal')
    </div>

    @yield('body')
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

    <div id="app" class="h-full">
        <x-global.header.default />
        <div class="flex max-w-screen-xl w-full mx-auto px-1 md:px-6 h-full pt-header">
            <div class="tm-sidebar md:w-1/4 lg:w-1/5 border-r-2"
                 x-data="sidebar()"
                 :class="{'tm-active': $store.sidebar.open}"
                 @click.away="hideAway"> <!-- .tm-active to toggle -->
                <x-global.sidebar.default />
            </div>
            <div class="w-full md:w-3/4 lg:w-3/5 px-2 md:px-6">
                content here
            </div>
            <div class="hidden lg:block w-1/5 border-l-2">
                <x-global.feed.default />
            </div>
        </div>
    </div>




{{--        @yield('body')--}}

        @livewireScripts
        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>
    </body>
</html>

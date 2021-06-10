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
        @yield('styles')

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('scripts-top')

        <!-- Scripts -->
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
        <script src="{{ url(mix('js/app.js')) }}" defer></script>
    </head>

    <body>

    <div id="app" class="h-full">
        <x-global.header.default />
        <div class="flex w-full h-full max-w-screen-xl px-1 mx-auto md:px-6 pt-header">
            <div class="border-r-2 tm-sidebar md:w-1/4 lg:w-1/5"
                 x-data="sidebar()"
                 :class="{'tm-active': $store.sidebar.open}"
                 @click.away="hideAway"> <!-- .tm-active to toggle -->
                <x-global.sidebar.default />
            </div>
            <div class="w-full px-2 md:w-3/4 lg:w-4/5 md:px-6">
                @yield('body')
            </div>
        </div>
    </div>

    <x-global.toast />

    <!-- Scripts -->
    @yield('scripts-bottom')
    </body>
</html>

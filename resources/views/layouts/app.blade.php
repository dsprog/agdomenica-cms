<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Agência Domenica</title>
        <link rel="shortcut icon" href="{{ asset('site/domenica-icon.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('site/domenica-icon.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;600;700&display=swap">
        @stack('stylesheets')
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/site.css?v=2') }}">
        @livewireStyles
        <!-- Scripts -->
        <script src="{{ asset('js/app.js?v=2') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            @include('site-top')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @include('site-footer')
        </div>
        <a href="{{ config('configs.whatsapp_url') }}" class="whatsfloat">
            <img src="{{ asset('site/whatsapp3.png')}}" alt="whatsapp" width="50" height="50"></a>
        @livewireScripts
        @stack('scripts')
    </body>
</html>

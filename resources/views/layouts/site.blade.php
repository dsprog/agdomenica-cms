<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @if(View::hasSection('title')) @yield('title') @endif AH! Natu
    </title>
    <link rel="stylesheet" href="{{ asset('site/style.css') }}" />
    <link rel="icon" href="{{ asset('site/images/favicon-32x32.jpg') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('site/images/favicon-192x192.jpg') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('site/images/favicon-180x180.jpg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;700;800;900&Roboto+Slab:wght@300;700;900&display=swap" rel="stylesheet">

    @livewireStyles

    @yield('custom_head', '')

</head>
<body>
    @include('includes.site.header')
    @yield('content')
    @include('includes.site.footer')

    @livewireScripts
    @yield('custom_footer', '')
</body>
</html>

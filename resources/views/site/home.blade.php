<x-app-layout>
    @push('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    @endpush
    <div class="container mx-auto text-center bg-gray-200">
        <div class="banner-home">
            @foreach ($banners as $banner)
            <div><a href="{{ $banner->url }}">
                <img src="{{ asset("uploads/".$banner->image) }}" alt="{{ $banner->title }}" class="w-full hidden md:inline-block">
                <img src="{{ asset("uploads/".$banner->image_mobile) }}" alt="{{ $banner->title }}" class="w-full inline-block md:hidden">
            </a></div>
            @endforeach
        </div>
    </div>
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
    <script>
        var svgPrev = '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">';
            svgPrev += '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>';

        var svgNext = '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">';
            svgNext += '<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>';

        var slider = tns({
            container: '.banner-home',
            mode: 'carousel',
            autoplay: true,
            controlsText: [svgPrev, svgNext],
        });
    </script>
    @endpush
</x-app-layout>

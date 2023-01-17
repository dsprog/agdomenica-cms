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
    <div class="container mx-auto py-10 px-4 md:px-0">
        <div class="grid md:grid-cols-7 gap-4 mb-10">
            <div class="text-center md:col-span-2">
                <img src="{{ asset("site/ead.png")}}" class="m-auto" width="80" height="79" alt="EAD Ao Vivo">
            </div>
            <div class="md:col-span-5">
                <img src="{{ asset("site/mba-cegea.png")}}" width="476" height="96" alt="MBA CEGEA ESQLQ USP">
            </div>
        </div>
        <div class="grid md:grid-cols-9 gap-4">
            <div class="md:col-span-1"></div>
            <div class="md:col-span-2">
                <img src="{{ asset("uploads/".$pos->image)}}" width="476" height="96" alt="MBA CEGEA ESQLQ USP">
            </div>
            <div class="md:col-span-5">
                <p><strong>OBJETIVO:</strong><br></p>
                <p>{!! $pos->resume !!}</p>
                <p class="pt-4"><a href="{{ route("site.posgraduacao") }}"><img src="{{ asset("site/saibamais.jpg") }}" alt="Planta" width="172" height="40"></a></p>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 py-10 px-2">
        <div class="container mx-auto">
            <h2 class="text-center"><img src="{{ asset("site/cursos-rapidos.png")}}" width="476" height="96" class="mx-auto" alt="MBA CEGEA ESQLQ USP"></h2>
            <p class="text-center pt-5 pb-10"><strong>CONHEÇA NOSSOS TREINAMENTOS DE CURTA DURAÇÃO</strong></p>
            <div class="grid md:grid-cols-4  gap-2 md:gap-6">
                @foreach ($cursos as $curso)
                <div class="md:col-span-1 bg-white rounded-lg shadow p-3 md:p-0">
                    <a href="{{route('site.curso', $curso->slug)}}"><img src="{{asset('uploads/'.$curso->image)}}" alt="" class="rounded-lg md:rounded-t-lg w-1/3 float-left md:w-full"></a>
                    <div class="pl-2 md:p-2 pb-4 md:text-center float-left w-2/3 md:w-full">
                        <span class="text-green-600 font-bold md:px-2 inline-block">{{ $curso->date_info }}</span><br>
                        <span class="md:pt-1 md:pb-2 font-bold text-gray-500 inline-block">{{ $curso->title }}</span><br>
                        <a href="{{route('site.curso', $curso->slug)}}" class="inline-block m-auto bg-primary text-white
                            rounded-md font-bold px-2 md:px-6 py-1 md:py-2 w-auto">SAIBA MAIS</a>
                    </div>
                </div>
                @endforeach
            </div>
                <div class="px-4 py-2">{{ $cursos->links() }}</div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 gap-6 py-10 px-2 md:px-0">
            <div class="">
                <h1><img src="{{ asset('site/cegea.png') }}" alt="Cegea" width="150" height="108"></h1>
                <p class="py-2">{!!$about->resume!!}</p>
                <p><a href="{{ route("site.sobre") }}"  class="inline-block m-auto bg-primary text-white
                    rounded-md font-bold px-6 py-2 w-auto mt-2">SAIBA MAIS</a></p>
            </div>
            <div>
                <img src="{{ asset('uploads/'.$about->image) }}" alt="imagens ecológicas" width="385" height="293">
            </div>
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

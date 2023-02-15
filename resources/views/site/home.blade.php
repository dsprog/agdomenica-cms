<x-app-layout>
    @push('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    @endpush
    <div class="w-full text-center bg-gray-200">
        <div class="banner-home">
            @foreach ($banners as $banner)
            <div><a href="{{ $banner->url }}">
                <img src="{{ asset("uploads/".$banner->image) }}" alt="{{ $banner->title }}" class="w-full hidden md:inline-block">
                <img src="{{ asset("uploads/".$banner->image_mobile) }}" alt="{{ $banner->title }}" class="w-full inline-block md:hidden">
            </a></div>
            @endforeach
        </div>
    </div>
    <main class="py-4 md:py-12">
        <div class="container mx-auto pb-4 md:pb-12">
            <h2 class="text-center text-3xl font-bold text-gray-500 uppercase pb-10">Clientes</h2>
            <div class="tns-outer clientes" id="fixedWidth-ow">
                <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0">
                  <button type="button" data-controls="prev" tabindex="-1" aria-controls="fixedWidth">prev</button>
                  <button type="button" data-controls="next" tabindex="-1" aria-controls="fixedWidth">next</button>
                </div>
                <div id="fixedWidth-mw" class="tns-ovh">
                  <div class="tns-inner" id="fixedWidth-iw">
                    <div class="fixedWidth  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="fixedWidth"
                      style="transform: translate3d(-8400px, 0px, 0px);">

                        @foreach ($clients as $client)
                            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                <img src="{{asset('uploads/' . $client->image)}}" alt="{{$client->title}}">
                            </div>
                        @endforeach

                    </div>
                  </div>
                </div>
            </div>
        </div>
        <p><img src="{{asset('site/neto-lea.jpg')}}" alt="Foto da Lea e Neto" id="quem-somos" class="w-full pb-10"></p>
        <div class="container mx-auto">
            <h2 class="text-center text-3xl font-bold text-gray-500 uppercase py-5">Quem Somos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4 py-4">
                <div>
                    <p class="pb-3">Mais do que ser uma agência de publicidade, somos apaixonados pelo nosso trabalho.<br>
                        Em mais de três décadas de mercado, passamos por todas as fases da comunicação, desde os bons
                        tempos dos veículos de mídias impressas, as estratégias e campanhas de varejo, o planejamento
                        estratégico e as produções, para um universo bastante restrito em relação ao atual.<br>
                        Grandes lutas para que o mercado regional entendesse a função de uma agência, o desenvolvimento
                        de colaboradores, parceiros e fornecedores, eventos, feiras e muito mais.</p>

                    <p class="pb-3">Toda essa trajetória nos possibilitou uma grande base de conhecimento, das criações às
                        produções, trazendo vasta expertise para que hoje, a <strong>Domenica Publicidade</strong>
                        possa atuar com muito mais conteúdo, no novo universo digital e suas vertentes.</p>
                </div>
                <div>
                    <p class="pb-3">Falar da comunicação de uma empresa, é falar sobre sua identidade, seu DNA, seus players e,
                        em especial, traduzir os seus valores.<br>
                        Ser apenas uma agência é muito pouco para se definir a importância do nosso trabalho.</p>

                    <p class="pb-3">Muito mais que criações, desenvolvemos estratégias para uma comunicação versátil,
                        inteligente e economicamente viável aos clientes.</p>
                    <p class="pb-3">Deixamos aqui um convite para que possamos conhecer melhor a sua empresa e lhe entregar o
                        nosso melhor:<br>
                        a nossa paixão!</p>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <h2 class="text-center text-3xl font-bold text-gray-500 uppercase py-5">Projetos</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-4 py-4">
                <div><a href="{{route('site.jobs')}}"></a><img src="{{asset('site/jobs.png')}}" alt=""></div>
                <div><a href="{{route('site.social_media')}}"></a><img src="{{asset('site/social-media.png')}}" alt=""></div>
                <div><a href="{{route('site.sites')}}"></a><img src="{{asset('site/sites.png')}}" alt=""></div>
                <div><a href="{{route('site.mkt_imobiliário')}}"></a><img src="{{asset('site/mkt-imobiliário.png')}}" alt=""></div>
            </div>
        </div>
    </main>
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

        var slider = tns({
            "container": "#fixedWidth",
            "fixedWidth": 290,
            "swipeAngle": false,
            "speed": 400,
            "controlsText": [svgPrev, svgNext],
            "responsive": {
                640: {
                    items: 1
                },
                700: {
                    items: 2
                },
                900: {
                    items: 4
                }
            }
        });
    </script>
    @endpush
</x-app-layout>

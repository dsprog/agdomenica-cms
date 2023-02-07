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
    <main class="py-4 md:py-10">
        <div class="container mx-auto">
            <h2 class="text-center text-3xl font-bold text-gray-500 uppercase py-10">Clientes</h2>
            <div class="tns-outer" id="fixedWidth-ow"><div class="tns-controls" aria-label="Carousel Navigation" tabindex="0">
                <button type="button" data-controls="prev" tabindex="-1" aria-controls="fixedWidth">prev</button>
                <button type="button" data-controls="next" tabindex="-1" aria-controls="fixedWidth">next</button>
            </div>
            <div class="tns-nav" aria-label="Carousel Pagination">
                <button type="button" data-nav="0" aria-controls="fixedWidth" style="" aria-label="Carousel Page 1" class="" tabindex="-1"></button>
                <button type="button" data-nav="1" aria-controls="fixedWidth" style="" aria-label="Carousel Page 2 (Current Slide)" class="tns-nav-active"></button>
                <button type="button" data-nav="2" aria-controls="fixedWidth" style="" aria-label="Carousel Page 3" class="" tabindex="-1"></button>
                <button type="button" data-nav="3" aria-controls="fixedWidth" style="display: none;" aria-label="Carousel Page 4" class="" tabindex="-1"></button>
                <button type="button" data-nav="4" aria-controls="fixedWidth" style="display: none;" aria-label="Carousel Page 5" class="" tabindex="-1"></button>
                <button type="button" data-nav="5" aria-controls="fixedWidth" style="display: none;" aria-label="Carousel Page 6" class="" tabindex="-1"></button>
                <button type="button" data-nav="6" tabindex="-1" aria-controls="fixedWidth" style="display: none;" aria-label="Carousel Page 7"></button>
            </div>
            <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">22 to 25</span>  of 7</div><div id="fixedWidth-mw" class="tns-ovh"><div class="tns-inner" id="fixedWidth-iw"><div class="fixedWidth  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="fixedWidth" style="transform: translate3d(-8400px, 0px, 0px);"><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-3">
                  <a href="">2</a>
                </div>
                <p>
                  Alias rem, ab impedit recusandae repellat tempore.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-4">
                  <a href="">3</a>
                </div>
                <p>
                  Nisi inventore quo delectus perspiciatis voluptatibus, quae.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-5">
                  <a href="">4</a>
                </div>
                <p>
                  Nisi harum earum consectetur laudantium iusto, laboriosam.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-6">
                  <a href="">5</a>
                </div>
                <p>
                  Dolores blanditiis neque, quis vitae? Reprehenderit, aliquam.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-7">
                  <a href="">6</a>
                </div>
                <p>
                  Omnis dolorum eum blanditiis, ratione voluptates quod.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-1">
                  <a href="">0</a>
                </div>
                <p>
                  Sunt dignissimos distinctio, veniam, tenetur aspernatur nulla!
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-2">
                  <a href="">1</a>
                </div>
                <p>
                  Corrupti, libero minima nihil expedita officiis? Quo.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-3">
                  <a href="">2</a>
                </div>
                <p>
                  Alias rem, ab impedit recusandae repellat tempore.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-4">
                  <a href="">3</a>
                </div>
                <p>
                  Nisi inventore quo delectus perspiciatis voluptatibus, quae.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-5">
                  <a href="">4</a>
                </div>
                <p>
                  Nisi harum earum consectetur laudantium iusto, laboriosam.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-6">
                  <a href="">5</a>
                </div>
                <p>
                  Dolores blanditiis neque, quis vitae? Reprehenderit, aliquam.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-7">
                  <a href="">6</a>
                </div>
                <p>
                  Omnis dolorum eum blanditiis, ratione voluptates quod.
                </p>
              </div>
              <div class="item tns-item" id="fixedWidth-item0" aria-hidden="true" tabindex="-1">
                <div class="img img-1">
                  <a href="">0</a>
                </div>
                <p>
                  Sunt dignissimos distinctio, veniam, tenetur aspernatur nulla!
                </p>
              </div>
              <div class="item tns-item" id="fixedWidth-item1" aria-hidden="true" tabindex="-1">
                <div class="img img-2">
                  <a href="">1</a>
                </div>
                <p>
                  Corrupti, libero minima nihil expedita officiis? Quo.
                </p>
              </div>
              <div class="item tns-item" id="fixedWidth-item2" aria-hidden="true" tabindex="-1">
                <div class="img img-3">
                  <a href="">2</a>
                </div>
                <p>
                  Alias rem, ab impedit recusandae repellat tempore.
                </p>
              </div>
              <div class="item tns-item" id="fixedWidth-item3" aria-hidden="true" tabindex="-1">
                <div class="img img-4">
                  <a href="">3</a>
                </div>
                <p>
                  Nisi inventore quo delectus perspiciatis voluptatibus, quae.
                </p>
              </div>
              <div class="item tns-item" id="fixedWidth-item4" aria-hidden="true" tabindex="-1">
                <div class="img img-5">
                  <a href="">4</a>
                </div>
                <p>
                  Nisi harum earum consectetur laudantium iusto, laboriosam.
                </p>
              </div>
              <div class="item tns-item" id="fixedWidth-item5" aria-hidden="true" tabindex="-1">
                <div class="img img-6">
                  <a href="">5</a>
                </div>
                <p>
                  Dolores blanditiis neque, quis vitae? Reprehenderit, aliquam.
                </p>
              </div>
              <div class="item tns-item" id="fixedWidth-item6" aria-hidden="true" tabindex="-1">
                <div class="img img-7">
                  <a href="">6</a>
                </div>
                <p>
                  Omnis dolorum eum blanditiis, ratione voluptates quod.
                </p>
              </div>
            <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-1">
                  <a href="">0</a>
                </div>
                <p>
                  Sunt dignissimos distinctio, veniam, tenetur aspernatur nulla!
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-2">
                  <a href="">1</a>
                </div>
                <p>
                  Corrupti, libero minima nihil expedita officiis? Quo.
                </p>
              </div><div class="item tns-item tns-slide-cloned tns-slide-active">
                <div class="img img-3">
                  <a href="">2</a>
                </div>
                <p>
                  Alias rem, ab impedit recusandae repellat tempore.
                </p>
              </div><div class="item tns-item tns-slide-cloned tns-slide-active">
                <div class="img img-4">
                  <a href="">3</a>
                </div>
                <p>
                  Nisi inventore quo delectus perspiciatis voluptatibus, quae.
                </p>
              </div><div class="item tns-item tns-slide-cloned tns-slide-active">
                <div class="img img-5">
                  <a href="">4</a>
                </div>
                <p>
                  Nisi harum earum consectetur laudantium iusto, laboriosam.
                </p>
              </div><div class="item tns-item tns-slide-cloned tns-slide-active">
                <div class="img img-6">
                  <a href="">5</a>
                </div>
                <p>
                  Dolores blanditiis neque, quis vitae? Reprehenderit, aliquam.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-7">
                  <a href="">6</a>
                </div>
                <p>
                  Omnis dolorum eum blanditiis, ratione voluptates quod.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-1" style="heigth:200px; width:200px; margin:2px;">
                  <a href="">0</a>
                </div>
                <p>
                  Sunt dignissimos distinctio, veniam, tenetur aspernatur nulla!
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-2" style="heigth:200px; width:200px; margin:2px;">
                  <a href="">1</a>
                </div>
                <p>
                  Corrupti, libero minima nihil expedita officiis? Quo.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-3" style="heigth:200px; width:200px; margin:2px;">
                  <a href="">2</a>
                </div>
                <p>
                  Alias rem, ab impedit recusandae repellat tempore.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-4" style="heigth:200px; width:200px; margin:2px;">
                  <a href="">3</a>
                </div>
                <p>
                  Nisi inventore quo delectus perspiciatis voluptatibus, quae.
                </p>
              </div><div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                <div class="img img-5" style="heigth:200px; width:200px; margin:2px;">
                  <a href="">4</a>
                </div>
                <p>
                  Nisi harum earum consectetur laudantium iusto, laboriosam.
                </p>
              </div></div></div></div></div>
        </div>
        <p><img src="{{asset('site/neto-lea.jpg')}}" alt="Foto da Lea e Neto" class="w-full pb-10"></p>
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
            "fixedWidth": 400,
            "swipeAngle": false,
            "speed": 400
        });
    </script>
    @endpush
</x-app-layout>

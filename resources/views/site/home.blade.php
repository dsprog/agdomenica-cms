<x-site-layout>
    @section('custom_head')
        <link rel="stylesheet" href="{{ asset('site/splide/css/splide.min.css') }}">
    @endsection
    @section('content')
    <main>
        <div class="splide" id="banner">
            <div class="splide__progress bg-marrom2">
                <div class="splide__progress__bar"></div>
            </div>
            <livewire:banner.view />
        </div>
        <div class="grid md:grid-cols-2 gap-4 md:gap-10 p-4 md:p-10">
            <div>
                <div class="box_nov_dest novidades">
                    <a href="#" class="overlay"><img src="{{ asset('site/images/novidades.png') }}" alt="Nossas novidades"></a>
                </div>
            </div>
            <div>
                <div class="box_nov_dest destaques">
                    <a href="#" class="overlay"><img src="{{ asset('site/images/destaques.png') }}" alt="Nossos destaques"></a>
                </div>
            </div>
        </div>
        <div class="bg-verde1 py-7 px-5 md:p-20">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 place-items-center">
                    <div class="md:col-span-2">
                        <div class="CloseInfo p-5" id="abreInfo1">
                            <h2 class="text-center"><img src="{{ asset('site/images/poder-natureza.png') }}" alt="O Poder da Natureza" class="m-auto"></h2>
                            <p class="py-5 text-center font-light text-lg text-marrom1">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p class="text-center hidden"><a href="#" class="inline-block text-base md:text-lg font-bold text-white border rounded-3xl py-2 px-8">Ver mais</a></p>
                        </div>
                        <div class="hidden CloseInfo" id="abreInfo2">
                            <h2 class="text-center"><img src="{{ asset('site/images/home-Blends.png') }}" alt="Blends" class="m-auto"></h2>
                            <p class="py-10 text-center font-light text-lg text-marrom1">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p class="text-center"><a href="produtos.php" class="font-roboto inline-block text-base md:text-lg font-bold text-white border rounded-3xl py-2 px-8">Ver mais</a></p>
                        </div>
                        <div class="hidden CloseInfo" id="abreInfo3">
                            <h2 class="text-center"><img src="{{ asset('site/images/home-Nutraceuticos.png') }}" alt="Nutracêuticos" class="m-auto"></h2>
                            <p class="py-10 text-center font-light text-lg text-marrom1">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p class="text-center"><a href="produtos.php" class="font-roboto inline-block text-base md:text-lg font-bold text-white border rounded-3xl py-2 px-8">Ver mais</a></p>
                        </div>
                        <div class="hidden CloseInfo" id="abreInfo4">
                            <h2 class="font-roboto text-white text-2xl md:text-3xl font-semibold text-center">
                                <span class="text-marrom1 text-2xl md:text-2xl">para você</span><br>Superalimentos
                            </h2>
                            <p class="py-10 text-center font-light text-lg text-marrom1">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p class="text-center"><a href="produtos.php" class="font-roboto inline-block text-base md:text-lg font-bold text-white border rounded-3xl py-2 px-8">Ver mais</a></p>
                        </div>
                        <div class="hidden CloseInfo" id="abreInfo5">
                            <h2 class="text-center"><img src="{{ asset('site/images/home-Tradicionais.png') }}" alt="Tradicionais" class="m-auto"></h2>
                            <p class="py-10 text-center font-light text-lg text-marrom1">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p class="text-center"><a href="produtos.php" class="font-roboto inline-block text-base md:text-lg font-bold text-white border rounded-3xl py-2 px-8">Ver mais</a></p>
                        </div>
                        <div class="hidden CloseInfo" id="abreInfo6">
                            <h2 class="font-roboto text-white text-2xl md:text-3xl font-semibold text-center">
                                <h2 class="text-center"><img src="{{ asset('site/images/home-acessorios.png') }}" alt="Acessórios" class="m-auto"></h2>
                                <p class="py-10 text-center font-light text-lg text-marrom1">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                <p class="text-center"><a href="produtos.php" class="font-roboto inline-block text-base md:text-lg font-bold text-white border rounded-3xl py-2 px-8">Ver mais</a></p>
                        </div>
                    </div>
                    <div class="md:col-span-1">
                        <ul class="hometipos">
                            <li><a href="javascript:;" onclick="info('abreInfo2')" class="font-roboto font-semibold text-lg md:text-xl text-center text-marrom1">
                                    <img src="{{ asset('site/images/icon-blands.png') }}" class="rounded-full mb-3 max-w-full m-auto border-2 border-white" alt="">Blends</a></li>
                            <li><a href="javascript:;" onclick="info('abreInfo3')" class="font-roboto font-semibold text-lg md:text-xl text-center text-marrom1">
                                    <img src="{{ asset('site/images/icon-nutraceuticos.png') }}" class="rounded-full mb-3 max-w-full m-auto border-2 border-white" alt="">Nutracêuticos</a></li>
                            <li><a href="javascript:;" onclick="info('abreInfo5')" class="font-roboto font-semibold text-lg md:text-xl text-center text-marrom1">
                                    <img src="{{ asset('site/images/icon-tradicionais.png') }}" class="rounded-full mb-3 max-w-full m-auto border-2 border-white" alt="">Tradicionais</a></li>
                            <li><a href="javascript:;" onclick="info('abreInfo6')" class="font-roboto font-semibold text-lg md:text-xl text-center text-marrom1">
                                    <img src="{{ asset('site/images/icon-acessorios.png') }}" class="rounded-full mb-3 max-w-full m-auto border-2 border-white" alt="">Acessórios</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="blog">
            <h2 class="font-lato text-verde1 text-center font-semibold text-3xl md:text-5xl mb-2">Blog</h2>
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:p-10 md:p-0">
                    <livewire:post.post-home />
                </div>
            </div>
        </div>
        <div class="bg-white pt-16 pb-10">
            <h2 class="text-center mb-8 w-auto">
                <a href="https://www.instagram.com/ahnatu/" target="_blank" class="font-roboto text-marrom1 font-semibold text-3xl">
                    <img src="{{ asset('site/images/instagram.png') }}" alt="" class="inline"> @ahnatu</a>
            </h2>
            <div class="splide" id="instagram">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><a href="https://www.instagram.com/ahnatu/" target="_blank"><img src="{{ asset('site/images/instagram-1.jpg') }}" class="w-full" alt=""></a></li>
                        <li class="splide__slide"><a href="https://www.instagram.com/ahnatu/" target="_blank"><img src="{{ asset('site/images/instagram-2.jpg') }}" class="w-full" alt=""></a></li>
                        <li class="splide__slide"><a href="https://www.instagram.com/ahnatu/" target="_blank"><img src="{{ asset('site/images/instagram-3.jpg') }}" class="w-full" alt=""></a></li>
                        <li class="splide__slide"><a href="https://www.instagram.com/ahnatu/" target="_blank"><img src="{{ asset('site/images/instagram-4.jpg') }}" class="w-full" alt=""></a></li>
                        <li class="splide__slide"><a href="https://www.instagram.com/ahnatu/" target="_blank"><img src="{{ asset('site/images/instagram-5.jpg') }}" class="w-full" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-white"><a href="produtos.php">
                <img src="{{ asset('site/images/banner-home-meio.jpg') }}" width="1920" height="848" class="max-w-full hidden md:block" alt="Para todos os momentos">
                <img src="{{ asset('site/images/banner-home-meio-m.jpg') }}" width="800" height="400" class="max-w-full block md:hidden" alt="Para todos os momentos">
            </a></div>
        <div class="bg-white pt-16 pb-10">
            <h2 class="text-center mb-8 w-auto">
                <a href="https://www.youtube.com/channel/UChcJ4fvhxto0HjQrtgP1vSQ" target="_blank" class="font-roboto text-marrom1 font-semibold text-3xl">
                    <img src="{{ asset('site/images/youtube.png') }}" alt="" class="inline"> AH! Natu</a>
            </h2>
            <div class="splide" id="youtube">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><a href="https://www.youtube.com/channel/UChcJ4fvhxto0HjQrtgP1vSQ" target="_blank"><img src="{{ asset('site/images/youtube-1.jpg') }}" class="px-1" alt=""></a></li>
                        <li class="splide__slide"><a href="https://www.youtube.com/channel/UChcJ4fvhxto0HjQrtgP1vSQ" target="_blank"><img src="{{ asset('site/images/youtube-2.jpg') }}" class="px-1" alt=""></a></li>
                        <li class="splide__slide"><a href="https://www.youtube.com/channel/UChcJ4fvhxto0HjQrtgP1vSQ" target="_blank"><img src="{{ asset('site/images/youtube-3.jpg') }}" class="px-1" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    @endsection
    @section('custom_footer')
    <script src="{{ asset('site/splide/js/splide.min.js') }}"></script>
    <script>
        new Splide( '#banner', {
            type: 'loop',
            autoplay: true

        } ).mount();

        new Splide( '#instagram', {
            type: 'loop',
            autoplay: true,
            perPage: 5,
            breakpoints: {
		        767: {
                    perPage: 1,
                }
            }
        }).mount();

        new Splide( '#youtube', {
            type: 'loop',
            autoplay: true,
            perPage: 3,
            breakpoints: {
		        767: {
                    perPage: 1,
                }
            }
        }).mount();
    </script>
    @endsection
</x-site-layout>

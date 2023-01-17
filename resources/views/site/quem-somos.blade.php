<x-site-layout>
    @section('title', 'Conheça à ')
    @section('content')
    <main>
        <div>
            <img src="{{ asset('site/images/banner-quem-somos.jpg') }}" class="w-full hidden md:block"
                alt="Olá, somos a AH! Natu. Assim mesmo, como um suspiro.">
            <img src="{{ asset('site/images/banner-quem-somos-m.jpg') }}" class="w-full block md:hidden"
                alt="Olá, somos a AH! Natu. Assim mesmo, como um suspiro.">
        </div>
        <div class="bg-quemsomos">
            <div class="container">
                <h1 class="text-center pb-10"><img src="{{ asset('site/images/nosso-proposito.png') }}" width="262" height="85"
                    alt="Nosso Propósito" class="mx-auto"></h1>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-3 md:w-4/5 m-auto">
                    <div>
                        <p class="text-center text-lato text-white font-light text-base px-4">
                            <img src="{{ asset('site/images/qs-ico1.png') }}" class="m-auto pb-3" alt="">
                            <span class="font-semibold text-lg md:text-xl">Respeito</span><br>
                            Nos preocupamos em não causar impactos ambientais negativos
                        </p>
                    </div>
                    <div>
                        <p class="text-center text-lato text-white font-light text-base px-4">
                            <img src="{{ asset('site/images/qs-ico2.png') }}" class="m-auto pb-3" alt="">
                            <span class="font-semibold text-lg md:text-xl">Qualidade</span><br>
                            Ingredientes de verdade, garantindo a qualidade dos nossos produtos
                        </p>
                    </div>
                    <div>
                        <p class="text-center text-lato text-white font-light text-base px-4">
                            <img src="{{ asset('site/images/qs-ico3.png') }}" class="m-auto pb-3" alt="">
                            <span class="font-semibold text-lg md:text-xl">Transparência</span><br>
                            Buscamos as melhores alternativas de produção, respeitando a natureza
                        </p>
                    </div>
                    <div>
                        <p class="text-center text-lato text-white font-light text-base px-4">
                            <img src="{{ asset('site/images/qs-ico4.png') }}" class="m-auto pb-3" alt="">
                            <span class="font-semibold text-lg md:text-xl">Nutrição</span><br>
                            Nutrientes e produtos para a vida mais equilibrada e saudável
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-quemsomos2">
            <div class="container">
                <h2 class="text-center pb-14"><img src="{{ asset('site/images/conecte-se.png') }}" width="321" height="85"
                    alt="Conecte-se com a gente" class="mx-auto"></h2>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                    <div class="hiddem md:block md:col-span-1">
                    </div>
                    <div class="md:col-span-6">
                        <div class="videoWrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Gvldj8Y8Kic" title="YouTube video player"
                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="md:col-span-4">
                        <img src="{{ asset('site/images/video.png') }}" class="mx-auto" alt="">
                        <p class="text-marrom2 text-lg md:text-xl font-semibold text-center pt-10">
                            Dê o play e confira um pouco da nossa essência.
                            Venha se conectar com natureza e suspire com a gente!"</p>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="container md:py-8">
            <h2 class="text-marrom2 text-2xl md:text-5xl text-roboto font-light text-center pt-10">
                Nossa <span class="font-bold">Linha do tempo</span></h2>
            <p class="text-marrom2 text-lg md:text-2xl text-lato font-light text-center pb-10">
                Conheça o crescimentos das AH! Natu e da empresa responsavel Florien</p>
        </div>
        <img src="{{ asset('site/images/linha-do-tempo.jpg') }}" alt="linha do tempo" width="1920" height="522" class="w-full">
        -->
        <div class="bg-quemsomos3">
            <h2 class="text-marrom2 text-2xl md:text-5xl text-roboto font-light text-center pt-10 md:pt-28 md:pb-5">
                Nossos <span class="font-bold">Produtos</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-0 md-10 md:mb-20">
                <div class="hover:border-8 hover:border-white hover:pt-4">
                    <img src="{{ asset('site/images/chas.png') }}" alt="Chá" width="480" height="545">
                    <p class="bg-prod1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nulla, qui quaerat eaque,
                        tenetur delectus quas amet repellat aut quis quo sed deleniti corrupti sapiente dolor,
                        earum unde aspernatur sunt.
                        <a href="#"><img src="{{ asset('site/images/ver-todos-1.png') }}" width="157" height="40"
                            alt="ver mais" class="mx-auto pt-5 block"></a>
                    </p>
                </div>
                <div class="hover:border-8 hover:border-white hover:pt-4">
                    <img src="{{ asset('site/images/suplementos.png') }}" alt="Suplementos" width="480" height="545">
                    <p class="bg-prod2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nulla, qui quaerat eaque,
                        tenetur delectus quas amet repellat aut quis quo sed deleniti corrupti sapiente dolor,
                        earum unde aspernatur sunt.
                        <a href="#"><img src="{{ asset('site/images/ver-todos-2.png') }}" width="157" height="40"
                            alt="ver mais" class="mx-auto pt-5 block"></a>
                    </p>
                </div>
                <div class="hover:border-8 hover:border-white hover:pt-4">
                    <img src="{{ asset('site/images/cozinha-funcional.png') }}" alt="Cozinha Funcional" width="480" height="545">
                    <p class="bg-prod3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nulla, qui quaerat eaque,
                        tenetur delectus quas amet repellat aut quis quo sed deleniti corrupti sapiente dolor,
                        earum unde aspernatur sunt.
                        <a href="#"><img src="{{ asset('site/images/ver-todos-3.png') }}" width="157" height="40"
                            alt="ver mais" class="mx-auto pt-5 block"></a>
                    </p>
                </div>
                <div class="hover:border-8 hover:border-white hover:pt-4">
                    <img src="{{ asset('site/images/acessorios.png') }}" alt="Acessórios" width="480" height="545">
                    <p class="bg-prod4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nulla, qui quaerat eaque,
                        tenetur delectus quas amet repellat aut quis quo sed deleniti corrupti sapiente dolor,
                        earum unde aspernatur sunt.
                        <a href="#"><img src="{{ asset('site/images/ver-todos-4.png') }}" width="157" height="40"
                            alt="ver mais" class="mx-auto pt-5 block"></a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    @endsection
</x-site-layout>

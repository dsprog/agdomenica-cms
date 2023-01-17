<header>
        <div class="suptop">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-9 gap-2 items-center">
                    <div class="lg:col-span-4">
                        <nav>
                            <a href="{{ route('seja-parceiro') }}">AH! Natu na sua loja</a>
                            <a href="{{ route('lojas-fisicas') }}">Lojas Físicas</a>
                            <a href="{{ route('lojas-online') }}">Lojas Online</a>
                        </nav>
                    </div>
                    <div class="lg:col-span-1 hidden md:block">
                        <a href="{{ route('home') }}" class="logo"><img src="{{ asset('site/images/ah-natu.svg') }}" alt=""></a>
                    </div>
                    <div class="col-span-7 lg:col-span-3">
                        <form action="#" class="busca">
                            <input type="text" name="search" placeholder="Estou procurando">
                            <button type="submit"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg></button>
                        </form>
                    </div>
                    <div class="lg:col-span-1">
                        <p class="siganos">
                            <span>Siga-nos</span>
                            <a href="https://www.instagram.com/ahnatu/" target="_blank">
                                <img src="{{ asset('site/images/icon-instagram2.png') }}" alt="instagram"></a>
                            <a href="https://www.facebook.com/ahnatu.alimentos" target="_blank">
                                <img src="{{ asset('site/images/icon-facebook2.png') }}" alt="facebook"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top bg-verde-300">
            <div class="container">
                <nav x-data="{ isOpen: false }">
                    <a href="index.php" class="logo"><img src="{{ asset('site/images/ah-natu.svg') }}" alt=""></a>
                    <button class="menumobile" type="button"
                        @click="isOpen = !isOpen"
                        @keydown.escape="isOpen = false"
                        x-show.transition="true"
                    >
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg></button>
                    <ul class="hidden lg:block" :class="{ 'block': isOpen, 'hidden': !isOpen }" x-show.transition="true">
                        <li><a href="index.php" class="px-5 py-2 rounded-3xl {{ request()->routeIs('home') ? 'bg-verde2' : '' }} hover:bg-verde2">Home</a></li>
                        <li><a href="{{ route('quem-somos') }}" class="px-5 py-2 rounded-3xl {{ request()->routeIs('quem-somos') ? 'bg-verde2' : '' }} hover:bg-verde2">Quem Somos</a></li>
                        <li x-data="{pid: 1}"><a href="javascript:;"  @click="$dispatch('open-dropdown',{pid})" class="px-5 py-2 rounded-3xl {{ request()->routeIs('produtos.*') ? 'bg-verde2' : '' }} hover:bg-verde2">Produtos</a></li>
                        <li><a href="produtos.php" class="px-5 py-2 rounded-3xl {{ request()->routeIs('acessorios.*') ? 'bg-verde2' : '' }} hover:bg-verde2">Acessórios</a></li>
                        <li><a href="{{ route('blog') }}" class="px-5 py-2 rounded-3xl {{ request()->routeIs('blog.*') ? 'bg-verde2' : '' }} hover:bg-verde2">Blog</a></li>
                        <li><a href="{{ route('contato') }}" class="px-5 py-2 rounded-3xl {{ request()->routeIs('contato') ? 'bg-verde2' : '' }} hover:bg-verde2">Contato</a></li>
                        <li class="menuoculto"><a href="{{ route('seja-parceiro') }}" class="px-5 py-2 rounded-3xl hover:bg-verde2">Tenha Ah! Natu na sua loja</a></li>
                        <li class="menuoculto"><a href="{{ route('lojas-fisicas') }}" class="px-5 py-2 rounded-3xl hover:bg-verde2">Lojas Fisicas Ah! Natu</a></li>
                        <li class="menuoculto"><a href="{{ route('lojas-online') }}" class="px-5 py-2 rounded-3xl hover:bg-verde2">Lojas Online Ah! Natu</a></li>
                        <li class="menuoculto pt-2">
                            <a href="https://www.instagram.com/ahnatu/" target="_blank"><img src="{{ asset('site/images/icon-instagram.png') }}" alt="instagram"></a>&nbsp;&nbsp;&nbsp;
                            <a href="https://www.facebook.com/ahnatu.alimentos" target="_blank"><img src="{{ asset('site/images/icon-facebook.png') }}" alt="facebook"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="menuprodutos"
            x-data="{ isOpenProd: false }"
            x-show="isOpenProd"
            @open-dropdown.window="if ($event.detail.pid == 1) isOpenProd = true"
            @click.away="isOpenProd = false"
        >
            <div class="close"><a href="javascript:;" @click="isOpenProd = !isOpenProd">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </a></div>

            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-2">
                    <div class="col-span-2">
                        <h3 class="bg-marrom1 px-4 py-2 rounded-3xl mb-3">
                            <a href="#" class="font-roboto text-white text-sm md:text-base uppercase">Chás</a>
                        </h3>
                        <ul class="mb-3 px-5">
                            <li><a href="produto.php" class="font-roboto block text-white uppercase text-sm md:text-base hover:border-white hover:border-l-4 hover:pl-2">Tradicionais</a></li>
                            <li><a href="produto.php" class="font-roboto block text-marrom1 uppercase text-sm md:text-base hover:border-white hover:border-l-4 hover:pl-2">Blends</a></li>
                            <li><a href="produto.php" class="font-roboto block text-marrom1 uppercase text-sm md:text-base hover:border-white hover:border-l-4 hover:pl-2">Especiais</a></li>
                        </ul>
                        <h3 class="bg-marrom1 px-4 py-2 rounded-3xl mb-3">
                            <a href="" class="font-roboto text-white text-sm md:text-base uppercase">Blends</a>
                        </h3>
                        <h3 class="bg-marrom1 px-4 py-2 rounded-3xl mb-3">
                            <a href="#" class="font-roboto text-white text-sm md:text-base uppercase">Especiais</a>
                        </h3>
                    </div>
                    <div class="col-span-3">
                        <ul class="mb-3 px-5">
                            <li><a href="javascript:;" class="pb-1 inline-block text-marrom1 font-medium uppercase
                                text-sm md:text-base hover:border-white hover:border-l-4 hover:pl-2" onclick="mostrar('AbreProd1')"
                                >Chá de Agoniada</a></li>
                            <li><a href="javascript:;" class="pb-1 inline-block text-marrom1 font-medium uppercase
                                text-sm md:text-base hover:border-white hover:border-l-4 hover:pl-2"  onclick="mostrar('AbreProd2')"
                                >Chá de Alcachofra</a></li>
                            <li><a href="javascript:;" class="pb-1 inline-block text-marrom1 font-medium uppercase
                                text-sm md:text-base hover:border-white hover:border-l-4 hover:pl-2" onclick="mostrar('AbreProd3')"
                                >Chá de Alcaçuz</a></li>
                            <li><a href="javascript:;" class="pb-1 inline-block text-marrom1 font-medium uppercase
                                text-sm md:text-base hover:border-white hover:border-l-4 hover:pl-2" onclick="mostrar('AbreProd1')"
                                >Chá de Agoniada</a></li>
                            <li><a href="javascript:;" class="pb-1 inline-block text-marrom1 font-medium uppercase
                                text-sm md:text-base hover:border-white hover:border-l-4 hover:pl-2" onclick="mostrar('AbreProd2')"
                                >Chá de Alcachofra</a></li>
                            <li><a href="produtos.php" class="px-5 py-1 mt-2 rounded-2xl inline-block bg-white hover:bg-marrom2 text-marrom1 hover:text-white font-medium uppercase text-sm md:text-base">
                                Ver todos <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a></li>
                        </ul>
                    </div>
                    <div class="hidden md:block col-span-7 border-l border-white CloseProd" id="AbreProd1">
                        <div class="grid grid-cols-3 gap-2 p-5">
                            <div class="col-span-2">
                                <h2 class="font-roboto text-white text-roboto text-xl pb-2 pt-10">Chá de Agoniada</h2>
                                <p class="text-white text-base font-light">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa est suscipit nobis eum
                                    saepe earum sapiente laudantium error ipsa in, quos quisquam magni dolores alias tenetur,
                                    neque nesciunt harum nulla. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa est suscipit nobis eum
                                    saepe earum sapiente laudantium error ipsa in, quos quisquam magni dolores alias tenetur,
                                    neque nesciunt harum nulla.</p>
                                <p><a href="produto.php" class="px-5 py-1 mt-2 rounded-2xl inline-block bg-white hover:bg-marrom2 text-marrom1 hover:text-white font-medium uppercase text-sm md:text-base">
                                Ver detalhes <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a></p>
                            </div>
                            <div>
                                <img src="{{ asset('site/images/produto.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="hidden col-span-7 border-l border-white CloseProd" id="AbreProd2">
                        <div class="grid grid-cols-3 gap-2 p-5">
                            <div class="col-span-2">
                                <h2 class="font-roboto text-white text-roboto text-xl pb-2 pt-10">Chá de Alcachofra</h2>
                                <p class="text-white text-base font-light">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa est suscipit nobis eum
                                    saepe earum sapiente laudantium error ipsa in, quos quisquam magni dolores alias tenetur,
                                    neque nesciunt harum nulla. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa est suscipit nobis eum
                                    saepe earum sapiente laudantium error ipsa in, quos quisquam magni dolores alias tenetur,
                                    neque nesciunt harum nulla.</p>
                                <p><a href="produto.php" class="px-5 py-1 mt-2 rounded-2xl inline-block bg-white hover:bg-marrom2 text-marrom1 hover:text-white font-medium uppercase text-sm md:text-base">
                                Ver detalhes <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                            </div>
                            <div>
                                <img src="{{ asset('site/images/produto2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="hidden col-span-7 border-l border-white CloseProd" id="AbreProd3">
                        <div class="grid grid-cols-3 gap-2 p-5">
                            <div class="col-span-2">
                                <h2 class="font-roboto text-white text-roboto text-xl pb-2 pt-10">Chá de Alcaçuz</h2>
                                <p class="text-white text-base font-light">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa est suscipit nobis eum
                                    saepe earum sapiente laudantium error ipsa in, quos quisquam magni dolores alias tenetur,
                                    neque nesciunt harum nulla. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa est suscipit nobis eum
                                    saepe earum sapiente laudantium error ipsa in, quos quisquam magni dolores alias tenetur,
                                    neque nesciunt harum nulla.</p>
                                <p><a href="produto.php" class="px-5 py-1 mt-2 rounded-2xl inline-block bg-white hover:bg-marrom2 text-marrom1 hover:text-white font-medium uppercase text-sm md:text-base">
                                Ver detalhes <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                            </div>
                            <div>
                                <img src="{{ asset('site/images/produto3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

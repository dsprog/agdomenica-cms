<header>
    <div class="container mx-auto">
        <div class="grid grid-cols-3 md:grid-cols-7 items-center p-4">
            <div class="col-span-2 md:col-span-1">
                <a href="{{ route('site.index') }}"><img src="{{ asset('site/domenica.png') }}"
                    alt="Agência Domenica" class="logo" width="150" height="108"></a>
            </div>
            <div class="col-span-1 md:col-span-5 menutop">
                <nav x-data="{ isOpen: false }" @keydown.escape="isOpen = false">
                    <button class="hambunger bg-black rounded" type="button"
                        @click="isOpen = !isOpen"
                        :class="{ 'transition transform-180': isOpen }"
                    >
                        <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="#FFF">
                            <path
                                x-show="isOpen"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
                            <path
                                x-show="!isOpen"
                                fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
                        </svg>
                    </button>
                    <div class="menu"
                        :class="{ 'block': isOpen, 'hidden md:block': !isOpen }"
                        @click.away="isOpen = true"
                        x-show.transition="true"
                    >
                        <ul>
                            <li><a href="{{ route('site.index') }}" @click="isOpen = false">Home</a></li>
                            <li><a href="{{ route('site.index') }}#quem-somos" @click="isOpen = false">Quem Somos</a></li>
                            <li><a href="{{ route('site.job') }}" @click="isOpen = false">Jobs</a></li>
                            <li><a href="{{ route('site.sites') }}" @click="isOpen = false">Sites</a></li>
                            <li><a href="{{ route('site.social_media') }}" @click="isOpen = false">Social Media</a></li>
                            <li><a href="{{ route('site.mkt_imobiliário') }}" @click="isOpen = false">Mkt Imobiliário</a></li>
                            <li><a href="{{ route('site.servicos') }}" @click="isOpen = false">Serviços</a></li>
                            <li><a href="#contato" @click="isOpen = false">Contato</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-span-1 hidden md:block socialtop">
                <div class="redes">
                    <a href="{{ config('configs.whatsapp') }}" target="_blank"><img src="{{ asset("site/whatsapp.png")}}" alt="Facebook" width="30" height="30"></a>
                    <a href="{{ config('configs.instagram') }}" target="_blank"><img src="{{ asset("site/instagram.png")}}" alt="Instagram" width="30" height="30"></a>
                    <a href="{{ config('configs.linkedin') }}" target="_blank"><img src="{{ asset("site/linkedin.png")}}" alt="Linkdin" width="30" height="30"></a>
                </div>
            </div>
        </div>
    </div>
</header>

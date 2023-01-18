<header>
    <div class="container mx-auto">
        <div class="grid grid-cols-3 md:grid-cols-7 items-center p-4">
            <div class="col-span-2 md:col-span-1">
                <a href="{{ route('site.index') }}"><img src="{{ asset('site/domenica.png') }}"
                    alt="Agência Domenica" class="logo" width="150" height="108"></a>
            </div>
            <div class="col-span-1 md:col-span-5 menutop">
                <nav x-data="{ isOpen: false }" @keydown.escape="isOpen = false">
                    <button class="hambunger" type="button"
                        @click="isOpen = !isOpen"
                        :class="{ 'transition transform-180': isOpen }"
                    >
                        <svg class="h-8 w-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="#4195C5">
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
                            <li {{ request()->routeIs('site.index')? 'class=active': '' }}><a href="{{ route('site.index') }}" @click="isOpen = false">Home</a></li>
                            <li {{ request()->routeIs('site.contato')? 'class=active': '' }}><a href="{{ route('site.contato') }}" @click="isOpen = false">Contato</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-span-1 hidden xl:block socialtop">
                <div class="siganos">Siga-nos</div>
                <div class="redes">
                    <a href="{{ config('configs.facebook') }}" target="_blank"><img src="{{ asset("site/facebook.png")}}" alt="Facebook" width="40" height="40"></a>
                    <a href="{{ config('configs.instagram') }}" target="_blank"><img src="{{ asset("site/instagram.png")}}" alt="Instagram" width="40" height="40"></a>
                    <a href="{{ config('configs.linkedin') }}" target="_blank"><img src="{{ asset("site/linkdin.png")}}" alt="Linkdin" width="40" height="40"></a>
                </div>
            </div>
        </div>
    </div>
</header>

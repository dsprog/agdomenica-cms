<x-site-layout>
    @section('title', 'Lojas Online - ')
    @section('content')
    <main>
        <div><h1>
            <img src="{{ asset('site/images/lojas-online.jpg') }}" class="w-full hidden md:block"
                alt="Agora você encontra as principais novidades da marca e muito mais disponíveis online.">
            <img src="{{ asset('site/images/lojas-online-m.jpg') }}" class="w-full block md:hidden"
                alt="Agora você encontra as principais novidades da marca e muito mais disponíveis online."></h1>
        </div>
        <div id="lojaonline" class="py-10 px-5 bg-folhas">
            <h3 class="text-marrom2 text-center text-roboto font-semibold text-2xl md:text-3xl pb-10">Acesse e inspiri-se!</h3>
            <div class="container">
                <div class="grid md:justify-items-center grid-cols-2 md:grid-cols-6 gap-4">
                    <div class="col-span-2 md:col-span-3">
                        <img src="{{ asset('site/images//notebook.jpg') }}" alt="notebook" width="825" height="450">
                    </div>
                    <div class="col-span-3">
                        <div class="grid grid-cols-3 gap-4">
                            <livewire:online-store.view />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kits pt-10">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-2 px-10 gap-4">
                    <div>
                        <p class="text-white text-roboto font-semibold text-2xl md:text-4xl md:pt-20 pb-10 md:w-2/3">
                            Encontre kits presenteáveis, lançamentos e muitas novidades.</p>
                        <p class="text-white text-roboto font-light text-2xl md:text-2xl pb-10 md:w-2/3">
                            Preparamos tudo com muito carinho para que chegue até você com todo conforto e segurança.</p>
                    </div>
                    <div>
                        <img src="{{ asset('site/images/kitis.png') }}" alt="imagem de um kit" width="593" height="603">
                    </div>
                </div>
            </div>
        </div>
        <div class="inspirese py-10 mb:pb-20 px-10">
            <div class="container">
                <img src="{{ asset('site/images/inspirados.png') }}" alt="inspirados pela nanureza">
            </div>
        </div>
    </main>
    @endsection
</x-site-layout>

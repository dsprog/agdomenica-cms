<x-app-layout>
    <div class="top-int">
        <h1 class="container mx-auto px-4"><img src="{{ asset("site/contato.jpg") }}" alt="Contato"></h1>
    </div>
    <div class="bg-gray-100 py-5">
        <div class="container mx-auto">
            <x-jet-banner />
            <div class="grid md:grid-cols-2 gap-6 py-10 px-4 md:px-0">
                <div>
                    <p class="text-center mb-2">Precisa de ajuda? Não encontrou a informação que precisa?<br>
                        Entre em contato conosco, será um prazer te atender.</p>
                    <form action="{{ route('site.enviar') }}" id="formCont" method="post">
                        @csrf
                        <input type="text" id="name" name="name" placeholder="Nome" autocomplete="nome"
                            class="block w-full border border-gray-400 rounded mt-3">
                        <x-jet-input-error for="name" />

                        <input type="email" id="email" name="email" placeholder="E-mail" autocomplete="email"
                            class="block w-full border border-gray-400 rounded mt-3">
                        <x-jet-input-error for="email" />

                        <input type="text" id="phone" name="phone" placeholder="Telefone" autocomplete="telefone"
                            class="block w-full border border-gray-400 rounded mt-3">
                        <x-jet-input-error for="phone" />

                        <input type="text" id="subject" name="subject" placeholder="Assunto" autocomplete="off"
                            class="block w-full border border-gray-400 rounded mt-3">
                        <x-jet-input-error for="subject" />

                        <textarea cols="30" rows="7" id="body" name="body" placeholder="Mensagem" autocomplete="off"
                            class="block w-full border border-gray-400 rounded mt-3"></textarea>
                        <x-jet-input-error for="body" />

                        <input type="submit" value="ENVIAR" class="bg-primary font-semibold text-white rounded-md px-4 py-2 mt-4">
                    </form>
                </div>
                <div class="hidden md:block">
                    <iframe width="100%" height="530" id="gmap_canvas"
                        src="https://maps.google.com/maps?q={{ config('configs.address') }},{{ config('configs.address_number') }},
                        {{ config('configs.address_city') }},{{ config('configs.address_state') }},
                        {{ config('configs.address_cep') }} &t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto py-2 md:py-5">
        <div class="grid md:grid-cols-5 gap-6 py-4 md:py-10 px-2 md:px-0">
            <div class="md:col-span-1">
                <p class="text-center"><a href="{{ config('configs.whatsapp_url') }}"
                    class="text-primary font-semibold text-lg md:text-2xl">
                    <img src="{{asset('site/ico1.png')}}" alt="whatsapp" class="m-auto mb-2 w-8 md:w-auto">
                    <strong>Whatsapp</strong><br>{{ config('configs.whatsapp') }}</a></p>
            </div>
            <div class="md:col-span-1">
                <p class="text-center"><a href="tel:{{ config('configs.phone') }}" class="text-primary font-semibold text-lg md:text-2xl">
                    <img src="{{asset('site/ico2.png')}}" alt="telefone" class="m-auto mb-2 w-8 md:w-auto">
                    <strong>Telefone</strong><br>{{ config('configs.phone') }}</a></p>
            </div>
            <div class="md:col-span-1">
                <p class="text-center"><a href="mailto:{{ config('configs.email') }}" class="text-primary font-semibold text-lg md:text-2xl">
                    <img src="{{asset('site/ico3.png')}}" alt="email" class="m-auto mb-2 w-8 md:w-auto">
                    <strong>E-mail</strong><br>{{ config('configs.email') }}</a></p>
            </div>
            <div class="md:col-span-2">
                <p class="text-center text-primary font-semibold text-lg md:text-2xl">
                    <img src="{{asset('site/ico4.png')}}" alt="whatsapp" class="m-auto mb-2 w-8 md:w-auto">
                    <strong>Endereço</strong><br>
                    {{ config('configs.address') }}, {{ config('configs.address_number') }}<br>
                    {{ config('configs.address_city') }}/{{ config('configs.address_state') }}
                    {{ config('configs.address_cep') }}<br>
                    @if (config('configs.address_complement'))
                        - {{ config('configs.address_complement') }}<br>
                    @endif
                    Escola Superior de Agricultura "Luiz de Queiroz"<br></p>
            </div>
        </div>
        <div class="block md:hidden">
            <iframe width="100%" height="530" id="gmap_canvas"
                src="https://maps.google.com/maps?q={{ config('configs.address') }},{{ config('configs.address_number') }},
                {{ config('configs.address_city') }},{{ config('configs.address_state') }},
                {{ config('configs.address_cep') }} &t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</x-app-layout>

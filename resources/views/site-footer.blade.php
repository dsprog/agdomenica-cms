<footer>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-8 px-4 py-4">
            <div class="col-span-3 pb-4 md:pb-0">
                <div class="endereco text-white text-sm">
                    {{ config('configs.address') }}, {{ config('configs.address_number') }} -
                    {{ config('configs.address_city') }}/{{ config('configs.address_state') }} -
                    {{ config('configs.address_cep') }}<br>
                    @if (config('configs.address_complement'))
                        {{ config('configs.address_complement') }}<br>
                    @endif
                    Escola Superior de Agricultura "Luiz de Queiroz"<br>
                    Fone: {{ config('configs.phone') }}
                    @if (config('configs.phone2'))
                     / {{ config('configs.phone2') }}
                    @endif
                    <br>WhatsApp: {{ config('configs.whatsapp') }}
                </div>
            </div>
            <div class="col-span-1 hidden md:block md:pb-0">
                <a href="{{ route('site.contato') }}" class="text-white text-sm">:: Contato</a><br>
            </div>
            <div class="col-span-1 hidden md:block md:pb-0">
                <a href="{{ route('site.index') }}" class="text-white text-sm">:: Home</a><br>
            </div>
            <div class="col-span-3 pb-4 md:pb-0">
                <p class="text-center lg:text-right"><img src="{{ asset("site/apoio.png")}}"
                    alt="Apoio: USP, Esalq e Fealq" class="inline-block"></p>
            </div>
        </div>
        <div class="grid md:grid-cols-2 px-4 py-4">
            <div class="text-white text-sm text-center md:text-left">CEGEA - Todos os direitos reservados - {{ now()->year }}</div>
            <div class="text-white text-sm text-center md:text-right">Desenvolvido por:
                <a href="https://cubolibre.com.br" target="_blank" class="text-gray-300">CuboLibre</a></div>
        </div>
    </div>
</footer>

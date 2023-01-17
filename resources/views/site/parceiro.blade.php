<x-site-layout>
    @section('title', 'Seja um parceiro - ')
    @section('content')
    <main>
        <div id="contato" class="py-10 px-5">
            <h1 class="text-verde3 text-center font-semibold text-3xl md:text-3xl">Seja um parceiro</h1>
            <div class="container">
                <p class="text-marrom1 text-center text-xl font-medium pb-10 pt-10">
                    Para fazer o cadastro é bem rápido, basta preencher os campos abaixo e enviar:</p>
                @livewire('partner.form')
            </div>
        </div>
    </main>
    @endsection
</x-site-layout>

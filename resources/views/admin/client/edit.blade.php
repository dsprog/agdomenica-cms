<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Adicionar Clientes') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.clients.index') }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.clients.update', $clients->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="w-full mb-5">
                                <label class="block">Cliente</label>
                                <x-jet-input name="title" type="text" value="{{ $clients->title }}" />
                                <x-jet-input-error for="title" />
                            </div>
                            <div class="mb-5">
                                <label class="block">Imagem (medida 259x200)</label>
                                <x-jet-input name="image" type="file" />
                                <x-jet-input-error for="image" />
                            </div>
                            <div class="mb-5">
                                <label class="block">Ativo</label>
                                <input type="radio" name="active" value="1" {{ ($clients->active == 1) ? 'checked':'' }}> Sim &nbsp;&nbsp;
                                <input type="radio" name="active" value="0" {{ ($clients->active == 0) ? 'checked':'' }}> Não
                            </div>
                            <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

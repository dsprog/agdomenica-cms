<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Adicionar Banner') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.banners.index') }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.banners.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="w-full mb-5">
                                <label class="block">Banner</label>
                                <x-jet-input name="title" type="text" value="{{ old('title') }}" />
                                <x-jet-input-error for="title" />
                            </div>
                            <div class="w-full mb-5">
                                <label class="block">Link</label>
                                <x-jet-input name="url" type="text" value="{{ old('url') }}" />
                                <x-jet-input-error for="url" />
                            </div>
                            <div class="mb-5">
                                <label class="block">Imagem (medida 1100x350)</label>
                                <x-jet-input name="image" type="file" />
                                <x-jet-input-error for="image" />
                            </div>
                            <div class="mb-5">
                                <label class="block">Imagem Mobile (medida 700x350)</label>
                                <x-jet-input name="image_mobile" type="file" />
                                <x-jet-input-error for="image_mobile" />
                            </div>
                            <div class="w-full md:w-2/5 mb-5">
                                <label class="block">Data da publicação</label>
                                <x-jet-input name="published_at" type="date" value="{{ old('published_at') }}" />
                                <x-jet-input-error for="published_at" />
                            </div>
                            <div class="w-full md:w-2/5 mb-5">
                                <label class="block">Data de expiração (não obrigatório)</label>
                                <x-jet-input name="expiration_date" type="date" value="{{ old('expiration_date') }}" />
                                <x-jet-input-error for="expiration_date" />
                            </div>
                            <div class="mb-5">
                                <label class="block">Ativo</label>
                                <input type="radio" name="active" value="1" checked> Sim &nbsp;&nbsp;
                                <input type="radio" name="active" value="0"> Não
                            </div>
                            <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

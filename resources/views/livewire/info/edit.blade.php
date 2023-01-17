<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alterar Modo de preparo') }}
            <a href="{{ route('info.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form wire:submit.prevent="update">
                        <div class="w-full mb-5">
                            <label class="block">Titulo</label>
                            <input type="text" wire:model.defer="info.title" class="w-full border-gray-300 @error('info.title') border-red-700 @enderror">
                            @error('info.title')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Imagem</label>
                            <input type="file" wire:model.defer="image" class="w-full border-gray-300 @error('image') border-red-700 @enderror">
                            @error('image')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Conteúdo') }}
            <a href="{{ route('content.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form action="" wire:submit.prevent="saveContent">
                        <div class="w-full mb-5">
                            <label class="block">Titulo</label>
                            <input type="text" wire:model.defer="title" class="w-full border-gray-300 @error('title') border-red-700 @enderror">
                            @error('title')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Descrição</label>
                            <input type="text" wire:model.defer="description" class="w-full border-gray-300 @error('description') border-red-700 @enderror">
                            @error('description')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Conteúdo</label>
                            <textarea wire:model.defer="body" class="w-full border-gray-300 @error('body') border-red-700 @enderror"></textarea>
                            @error('body')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Tipo</label>
                            <select wire:model.defer="type" class="w-full border-gray-300 @error('type') border-red-700 @enderror">
                                <option value="">Selecione o tipo</option>
                                <option value="1">Filme</option>
                                <option value="2">Serie</option>
                            </select>
                            @error('type')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Capa</label>
                            <input type="file" wire:model.defer="cover" class="w-full border-gray-300 @error('cover') border-red-700 @enderror">
                            @error('cover')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

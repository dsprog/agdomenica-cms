<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Loja Online') }}
            <a href="{{ route('online-store.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form action="" wire:submit.prevent="store">
                        <div class="w-full mb-5">
                            <label class="block">Loja</label>
                            <input type="text" wire:model.defer="name" class="w-full border-gray-300 @error('name') border-red-700 @enderror">
                            @error('name')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Url (link)</label>
                            <input type="text" wire:model.defer="url" class="w-full border-gray-300 @error('url') border-red-700 @enderror">
                            @error('url')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Logo (medida 244x132)</label>
                            <input type="file" wire:model.defer="logo" class="w-full border-gray-300 @error('logo') border-red-700 @enderror">
                            @error('logo')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

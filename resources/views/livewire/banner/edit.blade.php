<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Banner') }}
            <a href="{{ route('banner.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form action="" wire:submit.prevent="update">
                        <div class="w-full mb-5">
                            <label class="block">Banner</label>
                            <input type="text" wire:model.defer="banner.name" class="w-full border-gray-300 @error('banner.name') border-red-700 @enderror">
                            @error('banner.name')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Imagem (medida 1920x700)</label>
                            <input type="file" wire:model.defer="image" class="w-full border-gray-300 @error('image') border-red-700 @enderror">
                            @error('image')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Imagem Mobile (medida 800x400)</label>
                            <input type="file" wire:model.defer="image_mobile" class="w-full border-gray-300 @error('image_mobile') border-red-700 @enderror">
                            @error('image_mobile')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="w-full mb-5">
                            <label class="block">Data de expiração (não obrigatório)</label>
                            <input type="date" wire:model.defer="banner.expire" class="w-full border-gray-300 @error('banner.expire') border-red-700 @enderror">
                            @error('banner.expire')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Ativo</label>
                            <input type="radio" name="banner.status" wire:model.defer="banner.status" value="1"> Sim
                            <input type="radio" name="banner.status" wire:model.defer="banner.status" value="0"> Não
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

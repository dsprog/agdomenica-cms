<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Imagem do Produto') }}
            <a href="{{ route('products.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('success'))
                <div class="w-full px-4 py-2 border border-green-500 bg-green-500 text-white rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="px-8 pt-8">
                    <form wire:submit.prevent="save">
                        <div class="mb-5">
                            <label class="block">Imagem (medida 650x650)</label>
                            <input class="w-full border-gray-300 @error('fileimages.*') border-red-700 @enderror"
                                type="file" wire:model.defer="fileimages" multiple>
                            @error('fileimages.*')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                        <div wire:loading wire:target="save" class="text-green-700 pl-2">Carregando as imagens...</div>
                    </form>
                </div>
                <div class="pt-4 px-8 pb-8 mt-4 border-t border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">Lista de imagens</h2>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    @foreach ($list as $img)
                        <div class="border border-gray-300 rounded shadow relative">
                            <img class="w-full" src="{{ asset('storage/'.$img->image) }}" alt="" class="">
                            <div class="absolute top-2 right-2 bg-red-200 rounded-sm p-1 border border-red-400">
                            <livewire:product.gallery-delete :gallery="$img" :key="$img->id">
                            </livewire:product.gallery-delete>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    @if (count($list) < 1)
                        <span class="text-gray-500 text-center">Nenhuma imagem cadastrada!</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

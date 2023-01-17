<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alterar Produto') }}
            <a href="{{ route('products.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form wire:submit.prevent="update">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="mb-5">
                                <label class="block">Categoria</label>
                                <select wire:model.defer="product.category_id" class="w-full border-gray-300 @error('product.category_id') border-red-700 @enderror">
                                    <option value="0">Selecione</option>
                                    @foreach ($categories as $category)
                                        @if($category->subCategories->count() > 0)
                                            <optgroup label="{{ $category->name }}">
                                                @foreach ($category->subCategories as $subCategory)
                                                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                                @endforeach
                                            </optgroup>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('product.category_id')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                            </div>
                            <div class="w-full mb-5">
                                <label class="block">Produto</label>
                                <input type="text" wire:model.defer="product.name" class="w-full border-gray-300 @error('product.name') border-red-700 @enderror">
                                @error('product.name')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="block">Código</label>
                            <input type="text" wire:model.defer="product.code" class="w-full border-gray-300 @error('product.code') border-red-700 @enderror">
                            @error('product.code')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Titulo 1</label>
                            <input type="text" wire:model.defer="product.info1" class="w-full border-gray-300 @error('product.info1') border-red-700 @enderror">
                            @error('product.info1')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Descrição 1</label>
                            <textarea wire:model.defer="product.info1_text" class="w-full border-gray-300 @error('product.info1_text') border-red-700 @enderror"></textarea>
                            @error('product.info1_text')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Titulo 2</label>
                            <input type="text" wire:model.defer="product.info2" class="w-full border-gray-300 @error('product.info2') border-red-700 @enderror">
                            @error('product.info2')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Descrição 2</label>
                            <textarea wire:model.defer="product.info2_text" class="w-full border-gray-300 @error('product.info2_text') border-red-700 @enderror"></textarea>
                            @error('product.info2_text')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Titulo 3</label>
                            <input type="text" wire:model.defer="product.info3" class="w-full border-gray-300 @error('product.info3') border-red-700 @enderror">
                            @error('product.info3')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Descrição 3</label>
                            <textarea wire:model.defer="product.info3_text" class="w-full border-gray-300 @error('product.info3_text') border-red-700 @enderror"></textarea>
                            @error('product.info3_text')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="mb-5">
                                <label class="block">Capa (medida 650x650)</label>
                                <input type="file" wire:model.defer="capa" class="w-full border-gray-300 @error('capa') border-red-700 @enderror">
                                @error('capa')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-5">
                                <label class="block">Imagem (medida 650x650)</label>
                                <input type="file" wire:model.defer="image" class="w-full border-gray-300 @error('image') border-red-700 @enderror">
                                @error('image')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="mb-5">
                                <p class="font-bold block py-3 my-4">Outras Informações</p>
                                @foreach ($infos as $info)
                                    <label class="block">
                                        <input type="checkbox" wire:model.defer="selectedInfo" value="{{$info->id}}"
                                        @if(in_array($info->id,$selectedInfo)) checked @endif
                                        id="{{ $info->id }}"  wire:key="info-checkbox-{{ $info->id }}"
                                        >
                                        {{$info->title}}
                                        @error('info_id')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                                    </label>
                                @endforeach
                            </div>
                            <div class="mb-5">
                                <label class="block">Ativo</label>
                                <input type="radio" name="status" wire:model.defer="product.status" value="1"> Sim
                                <input type="radio" name="status" wire:model.defer="product.status" value="0"> Não
                                <p>&nbsp;</p>
                                <label class="block">Exibir no menu</label>
                                <input type="checkbox" wire:model.defer="product.menu">
                            </div>
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

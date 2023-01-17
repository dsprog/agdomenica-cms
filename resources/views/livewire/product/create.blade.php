<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Produto') }}
            <a href="{{ route('products.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form wire:submit.prevent="store">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="mb-5">
                                <label class="block">Categoria</label>
                                <select wire:model.defer="category_id" class="w-full border-gray-300 @error('category_id') border-red-700 @enderror">
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
                                @error('category_id')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-5">
                                <label class="block">Código</label>
                                <input type="text" wire:model.defer="code" class="w-full border-gray-300 @error('code') border-red-700 @enderror">
                                @error('code')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="md:col-span-12 mb-5">
                            <label class="block">Produto</label>
                            <input type="text" wire:model.defer="name" class="w-full border-gray-300 @error('name') border-red-700 @enderror">
                            @error('name')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="md:col-span-12 mb-5">
                            <label class="block">Titulo 1</label>
                            <input type="text" wire:model.defer="info1" class="w-full border-gray-300 @error('info1') border-red-700 @enderror">
                            @error('info1')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="md:col-span-full mb-5">
                            <label class="block">Descrição 1</label>
                            <textarea wire:model.defer="info1_text" class="w-full border-gray-300 @error('info1_text') border-red-700 @enderror"></textarea>
                            @error('info1_text')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Titulo 2</label>
                            <input type="text" wire:model.defer="info2" class="w-full border-gray-300 @error('info2') border-red-700 @enderror">
                            @error('info2')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Descrição 2</label>
                            <textarea wire:model.defer="info2_text" class="w-full border-gray-300 @error('info2_text') border-red-700 @enderror"></textarea>
                            @error('info2_text')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Titulo 3</label>
                            <input type="text" wire:model.defer="info3" class="w-full border-gray-300 @error('info3') border-red-700 @enderror">
                            @error('info3')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Descrição 3</label>
                            <textarea wire:model.defer="info3_text" class="w-full border-gray-300 @error('info3_text') border-red-700 @enderror"></textarea>
                            @error('info3_text')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
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
                                <p class="font-bold block">Icones de informações</p>
                                @foreach ($infos as $info)
                                <div class="w-full">
                                    {{$info->id}}
                                    <label>{{$info->title}}</label>
                                    <input type="checkbox" wire:model.defer="info_id" value="{{$info->id}}">
                                </div>
                                @endforeach
                            </div>
                            <div class="mb-5">
                                <label class="block">Ativo</label>
                                <input type="radio" name="status" wire:model.defer="status" value="1"> Sim
                                <input type="radio" name="status" wire:model.defer="status" value="0"> Não
                                <p>&nbsp;</p>
                                <label class="block">Exibir no menu</label>
                                <input type="checkbox" wire:model.defer="menu">
                            </div>
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

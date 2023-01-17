<div class="max-w-7xl mx-auto mt-10 py-6 px-4 sm:px-6 lg:px-8">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Conteúdo') }}
            <a href="{{ route('content.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>

    <form action="" wire:submit.prevent="editContent">

        <div class="mb-5">
            <label class="block">Titulo</label>
            <input type="text" wire:model.defer="content.title" class="w-full @error('content.title') border-red-700 @enderror">

            @error('content.title')
            <strong class="block mt-4 text-red-700 font-bold">{{$message}}</strong>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block">Descrição</label>
            <input type="text" wire:model.defer="content.description" class="w-full @error('content.description') border-red-700 @enderror">

            @error('content.description')
            <strong class="block mt-4 text-red-700 font-bold">{{$message}}</strong>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block">Conteúdo</label>
            <textarea wire:model.defer="content.body" class="w-full @error('content.body') border-red-700 @enderror"></textarea>

            @error('content.body')
            <strong class="block mt-4 text-red-700 font-bold">{{$message}}</strong>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block">Tipo</label>

            <select wire:model.defer="content.type" class="w-full @error('type') border-red-700 @enderror">
                <option value="1">Filme</option>
                <option value="2">Serie</option>
            </select>

            @error('type')
            <strong class="block mt-4 text-red-700 font-bold">{{$message}}</strong>
            @enderror
        </div>


        <div class="mb-5 flex">
            <div class="w-1/3 flex items-center justify-center">
                <label class="block mr-5">Capa</label>

                <input type="file" wire:model.defer="content.cover"
                       class="w-full @error('cover') border-red-700 @enderror">

                @error('cover')
                <strong class="block mt-4 text-red-700 font-bold">{{$message}}</strong>
                @enderror
            </div>
            <div class="w-2/3">
                @if($content->cover)
                    <img src="{{asset('storage/' . $content->cover)}}" alt="Capa do Conteúdo {{$content->title}}">
                @endif
            </div>
        </div>

        <button class="border border-green-500 px-5 py-2 rounded">Salvar</button>

    </form>
</div>

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Matéria') }}
            <a href="{{ route('post.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form wire:submit.prevent="store">
                        <div class="w-full mb-5">
                            <label class="block">Titulo</label>
                            <input type="text" wire:model.defer="title" class="w-full border-gray-300 @error('title') border-red-700 @enderror">
                            @error('title')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="w-full mb-5">
                            <label class="block">Resumo</label>
                            <input type="text" wire:model.defer="resume" class="w-full border-gray-300 @error('resume') border-red-700 @enderror">
                            @error('resume')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Conteúdo</label>
                            <textarea wire:model.defer="content" class="w-full border-gray-300 @error('content') border-red-700 @enderror"></textarea>
                            @error('content')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Imagem (medida 480x570)</label>
                            <input type="file" wire:model.defer="image" class="w-full border-gray-300 @error('image') border-red-700 @enderror">
                            @error('image')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Data de Publicação</label>
                            <input type="date" wire:model.defer="publish_at" class="w-full border-gray-300 @error('publish_at') border-red-700 @enderror">
                            @error('publish_at')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        <div class="mb-5">
                            <label class="block">Ativo</label>
                            <input type="radio" name="status" wire:model.defer="status" value="1"> Sim
                            <input type="radio" name="status" wire:model.defer="status" value="0"> Não
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

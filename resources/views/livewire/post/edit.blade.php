<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Matéria') }}
            <a href="{{ route('post.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form wire:submit.prevent="update">
                        <div class="w-full mb-5">
                            <label class="block">Titulo</label>
                            <input type="text" wire:model.defer="post.title" class="w-full border-gray-300 @error('post.title') border-red-700 @enderror">
                            @error('post.title')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="w-full mb-5">
                            <label class="block">Resumo</label>
                            <input type="text" wire:model.defer="post.resume" class="w-full border-gray-300 @error('post.resume') border-red-700 @enderror">
                            @error('post.resume')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Conteúdo</label>
                            <textarea wire:model.defer="post.content" class="w-full border-gray-300 @error('post.content') border-red-700 @enderror"></textarea>
                            @error('post.content')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Imagem (medida 480x570)</label>
                            <input type="file" wire:model.defer="image" class="w-full border-gray-300 @error('image') border-red-700 @enderror">
                            @error('image')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Data de Publicação</label>
                            <input type="date" wire:model.defer="post.publish_at" class="w-full border-gray-300 @error('post.publish_at') border-red-700 @enderror">
                            @error('post.publish_at')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Ativo</label>
                            <input type="radio" name="post.status" wire:model.defer="post.status" value="1"> Sim
                            <input type="radio" name="post.status" wire:model.defer="post.status" value="0"> Não
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

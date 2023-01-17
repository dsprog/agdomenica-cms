<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alterar Conteúdo') }}
            <a href="{{ route('faq.index') }}" class="-mt-2 float-right text-base bg-blue-500 text-white px-4 py-2">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form action="" wire:submit.prevent="updateFaq">
                        <div class="w-full mb-5">
                            <label class="block">Pergunta</label>
                            <input type="text" wire:model.defer="faq.question" class="w-full border-gray-300">
                            @error('faq.question')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-5">
                            <label class="block">Resposta</label>
                            <textarea wire:model.defer="faq.answer" class="w-full border-gray-300"></textarea>
                            @error('faq.answer')<span class="block mt-1 text-sm text-red-700">{{$message}}</span>@enderror
                        </div>
                        <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

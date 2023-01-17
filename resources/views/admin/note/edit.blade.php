<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Alterar Avaliação') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.notes.index', ['discipline_id' => $note->discipline_id]) }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.notes.update', $note->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <x-jet-input type="hidden" name="discipline_id" value="{{$note->discipline_id}}" />

                            <div class="w-full mb-5">
                                <label class="block">Nome</label>
                                <x-jet-input name="name" type="text" value="{{ $note->name }}" />
                                <x-jet-input-error for="name" />
                            </div>

                            <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

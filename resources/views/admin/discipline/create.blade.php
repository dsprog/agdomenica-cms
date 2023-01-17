<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Adicionar Disciplina') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.discipline.index', ['ead' => $eadId]) }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.discipline.store') }}" method="post">
                            @csrf
                            <x-jet-input type="hidden" name="ead_id" value="{{$eadId}}" />
                            <div class="w-full mb-5">
                                <label class="block">Disciplina</label>
                                <x-jet-input name="title" type="text" value="{{ old('title') }}" />
                                <x-jet-input-error for="title" />
                            </div>
                            <div class="mb-2">
                                <label class="block">Selecione o Professor</label>
                                @if ($teachers->count() == 0)
                                    <p class="mt-2 pt-1 text-red-600">Não há nenhum Professor cadastrado!</p>
                                @endif
                                <select name="user_id" class="p-3 pr-8 border-gray-300">
                                    <option value="#" disabled selected>
                                        Selecione o Professor
                                    </option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{$teacher->id}}">
                                            {{$teacher->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="block">Ativo</label>
                                <input type="radio" name="active" value="1" checked> Sim &nbsp;&nbsp;
                                <input type="radio" name="active" value="0"> Não
                            </div>
                            <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

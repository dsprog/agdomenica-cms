<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Alterar Disciplina') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.discipline.index', ['ead' => $discipline->ead_id]) }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.discipline.update', $discipline->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <x-jet-input type="hidden" name="ead_id" value="{{$discipline->ead_id}}" />

                            <div class="w-full mb-5">
                                <label class="block">Disciplina</label>
                                <x-jet-input name="title" type="text" value="{{ $discipline->title }}" />
                                <x-jet-input-error for="title" />
                            </div>
                            <div class="mb-2">
                                <label class="block">Selecione o Professor</label>
                                <select name="user_id" class="p-3 pr-8 border-gray-300">
                                    @foreach ($teachers as $teacher)
                                        @if ($teacher->id == $discipline->user_id)
                                            <option value="{{$discipline->user_id}}" selected>
                                                {{$teacher->name}}
                                            </option>
                                        @endif
                                        <option value="{{$teacher->id}}">
                                            {{$teacher->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="block">Ativo</label>
                                <input type="radio" name="active" value="1" {{ ($discipline->active == 1) ? 'checked':'' }}> Sim &nbsp;&nbsp;
                                <input type="radio" name="active" value="0" {{ ($discipline->active == 0) ? 'checked':'' }}> Não
                            </div>
                            <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

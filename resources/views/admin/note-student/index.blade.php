<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nota dos alunos da Avaliação/ ') }} <strong class="font-semibold text-2xl">{{$note->name}}</strong>
            <x-admin-top-botao text="Voltar" link="{{ route('admin.notes.index', ['discipline_id' => $note->discipline_id]) }}" class="ml-2" />

        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                                    width="50">
                                    #
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Aluno
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Nota Atual
                                </th>
                                <th scope="col" width="200"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Atualizar Nota
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <form action="{{route('admin.grades.update', $note->id)}}" method="post">
                            @csrf
                            @method('PUT')

                        @foreach ($students as $student)
                            <x-jet-input name="user_id[]" type="hidden" value="{{$student->id}}" />

                            <tr>
                                <td class="px-6 py-2 ">
                                    <div class="text-sm text-gray-900">#</div>
                                </td>

                                <td class="px-6 py-2 ">
                                    <div class="text-sm text-gray-900">{{ $student->name }}</div>
                                </td>
                        @if ($student->notes())

                            @foreach ($student->notes as $item)
                                @if ($item->pivot->note_id == $note->id && $item->pivot->user_id == $student->id)

                                    <td class="px-6 py-2 ">
                                        <div class="text-sm text-gray-900">
                                            {{$item->pivot->note ? $item->pivot->note : 'Não avaliado'}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-2 ">
                                        <div class="text-sm text-gray-900 w-12 ml-6">
                                            <x-jet-input name="note[]" type="text" value="{{$item->pivot->note}}" />
                                            <x-jet-input-error for="note" />
                                        </div>
                                    </td>
                                @endif
                            @endforeach

                            @if ($countUser < 0)
                                <td class="px-6 py-2 ">
                                    <div class="text-sm text-gray-900">
                                        Não avaliado
                                    </div>
                                </td>

                                <td class="px-6 py-2 ">
                                    <div class="text-sm text-gray-900 w-12 ml-6">
                                        <x-jet-input name="note[]" type="text" value="0" />
                                        <x-jet-input-error for="note" />
                                    </div>
                                </td>
                            @endif

                        @endif
                            @if (!$student->notes())
                                <td class="px-6 py-2 ">
                                    <div class="text-sm text-gray-900">
                                        Não avaliado
                                    </div>
                                </td>
                                <td class="px-6 py-2 ">
                                    <div class="text-sm text-gray-900 w-12 ml-6">
                                        <x-jet-input name="note[]" type="text" value="0" />
                                        <x-jet-input-error for="note" />
                                    </div>
                                </td>
                            @endif
                            </tr>
                        @endforeach
                            @if (count($students) < 1)
                                <tr>
                                    <td colspan="4" class="px-6 py-3 text-center">
                                        <span class="text-gray-500">Nenhum aluno encontrado!</span>
                                    </td>
                                </tr>
                            @endif

                            <td>
                                <button type="submit" class="bg-green-500 text-white mt-4 px-4 py-2">Enviar</button>
                            </td>
                        </form>
                        </tbody>
                    </table>
                    <div class="p-5">{{ $students->appends(request()->query())->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

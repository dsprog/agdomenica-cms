<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Disciplinas') }}
            <x-admin-top-botao text="Voltar" link="{{ route('admin.ead.index') }}" class="ml-2" />
            <x-admin-top-botao text="Adicionar" link="{{ route('admin.discipline.create', ['ead' => $eadId]) }}" />

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
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Disciplina
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Professor
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Aulas
                                </th>
                                <th scope="col" width="150"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Criado em
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                                    width="100">
                                    Ação
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($disciplines as $discipline)
                                <tr>
                                    <td class="px-6 py-2 ">
                                        <div class="text-sm text-gray-900">{{ $discipline->title }}</div>
                                    </td>
                                    <td class="px-6 py-2 ">
                                        <div class="text-sm text-gray-900">{{ $discipline->user->name }}</div>
                                    </td>
                                    <td class="px-6 py-2 ">
                                        <div class="text-sm text-gray-900">{{ $discipline->lessons->count() }}</div>
                                    </td>
                                    <td class="px-6 py-2 ">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                            {{ Carbon\Carbon::parse($discipline->published_at)->format('d/m/Y') }}</span>
                                    </td>
                                    <td class="px-6 py-2  text-right text-sm font-medium">
                                        <div class="flex items-center">
                                            <a href="{{ route('admin.notes.index', ['discipline_id' => $discipline])}}" class="mr-2" title="mostrar avaliações">
                                                <x-icons type="notes" />
                                            </a>
                                            <a href="{{ route('admin.average.index', ['discipline_id' => $discipline, 'ead' => $eadId])}}" class="mr-2" title="mostrar média dos alunos">
                                                <x-icons type="view" />
                                            </a>
                                            <a href="{{ route('admin.lessons.index', ['ead' => $eadId, 'discipline' => $discipline->id]) }}" class="mr-2" title="mostrar aulas"><x-icons type="lessons" />
                                            </a>

                                            <a href="{{ route('admin.discipline.edit', $discipline) }}" class="mr-2" title="editar disciplina">
                                                <x-icons type="edit" />
                                            </a>
                                            <a href="#" title="excluir disciplina">
                                                <x-buttons.delete :action="route('admin.discipline.destroy', $discipline->id)"/>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($disciplines) < 1)
                                <tr>
                                    <td colspan="5" class="px-6 py-3 text-center">
                                        <span class="text-gray-500">Nenhuma disciplina cadastrada!</span>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="p-5">{{ $disciplines->appends(request()->query())->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Cursos EAD') }}
            <x-admin-top-botao text="Adicionar" link="{{ route('admin.ead.create') }}" />
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Curso EAD
                                </th>
                                <th scope="col" width="50"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Ativo
                                </th>
                                <th scope="col" width="140"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Publicar em
                                </th>
                                <th scope="col" width="140"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Expira em
                                </th>
                                <th scope="col" width="100"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Disciplinas
                                </th>
                                <th scope="col" width="100"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Aulas
                                </th>
                                <th scope="col" width="100"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Alunos
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                                    width="100">
                                    Ação
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($eads as $ead)
                                <tr>
                                    <td class="px-4 py-2">
                                        <div class="text-sm text-gray-900">{{ $ead->title }}</div>
                                    </td>
                                    <td class="px-4 py-2">
                                        <div class="text-sm text-gray-900">{{ $ead->active ? 'Sim' : 'Não' }}</div>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                            {{ $ead->published_at ? \Carbon\Carbon::parse($ead->published_at)
                                                ->format('d/m/Y') : 'Não Expira' }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                            {{ $ead->expiration_date ? \Carbon\Carbon::parse($ead->expiration_date)
                                                ->format('d/m/Y') : 'Não Expira' }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <div class="text-sm text-gray-900">{{ $ead->disciplines()->count() }}</div>
                                    </td>
                                    <td class="px-4 py-2">
                                        <div class="text-sm text-gray-900">{{ $ead->lessons()->count() }}</div>
                                    </td>
                                    <td class="px-4 py-2">
                                        <div class="text-sm text-gray-900">{{ $ead->users()->count() }}</div>
                                    </td>
                                    <td class="px-4 py-2 text-right text-sm font-medium">
                                        <div class="flex items-center">
                                            <a href="{{ route('admin.ead.studients', $ead->id) }}" class="mr-2" title="visualizar alunos"><x-icons type="users" /></a>
                                            <a href="{{ route('admin.discipline.index', ['ead' => $ead]) }}" class="mr-2" title="ver disciplinas"><x-icons type="discipline" /></a>
                                            <a href="{{ route('admin.ead.edit', $ead) }}" class="mr-2" title="editar curso ead"><x-icons type="edit" /></a>
                                            <a href="#" title="excluir ead">
                                                <x-buttons.delete :action="route('admin.ead.destroy', $ead->id)"/>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($eads) < 1)
                                <tr>
                                    <td colspan="11" class="px-4 py-3 text-center">
                                        <span class="text-gray-500">Nenhum curso ead cadastrado!</span>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="p-5">{{ $eads->appends(request()->query())->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

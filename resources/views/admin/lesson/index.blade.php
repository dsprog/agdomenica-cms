<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Aulas - EAD') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.ead.index') }}" class="ml-2" />
                <x-admin-top-botao text="Adicionar" link="{{ route('admin.lessons.create', ['ead' => $ead->id, 'discipline' => $discipline->id]) }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-2">
                            <p><strong>Curso:</strong> {{ $ead->title }}</p>
                            <p><strong>Disciplina:</strong> {{ $discipline->title }}</p>
                            <p><strong>Ativo:</strong> {{ $ead->active ? 'Sim' : 'Não' }}</p>
                        </div>
                        <div>
                            <p><strong>Data da publicação:</strong>
                                {{ \Carbon\Carbon::parse($ead->published_at )
                                    ->format('d/m/Y')}}</p>
                            <p><strong>Data de expiração:</strong>
                                {{ $ead->expiration_date ?
                                    \Carbon\Carbon::parse($ead->expiration_date)
                                    ->format('d/m/Y') : 'Não Expira' }}</p>
                        </div>
                    </div>
                    <hr class="my-2">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">Aulas</h2>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Aula
                                </th>
                                <th scope="col" width="50"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Ativo
                                </th>
                                <th scope="col" width="150"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Publicar em
                                </th>
                                <th scope="col" width="150"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Expira em
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                                    width="100">
                                    Ação
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($lessons as $lesson)
                                <tr>
                                    <td class="px-4 py-2">
                                        <div class="text-sm text-gray-900">{{ $lesson->title }}</div>
                                    </td>
                                    <td class="px-4 py-2">
                                        <div class="text-sm text-gray-900">{{ $lesson->active ? 'Sim' : 'Não' }}</div>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                            {{ $lesson->published_at ? \Carbon\Carbon::parse($lesson->published_at)
                                                ->format('d/m/Y') : 'Não Expira' }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                            {{ $lesson->expiration_date ? \Carbon\Carbon::parse($lesson->expiration_date)
                                                ->format('d/m/Y') : 'Não Expira' }}</span>
                                    </td>
                                    <td class="px-4 py-2 text-right text-sm font-medium">
                                        <div class="flex items-center">
                                            <a href="{{ route('admin.lessons.show', $lesson->id ) }}" class="mr-2" title="visualizar aula"><x-icons type="view" /></a>
                                            <a href="{{ route('admin.lessons.edit', $lesson->id ) }}" class="mr-2" title="editar aula"><x-icons type="edit" /></a>
                                            <a href="#" title="excluir aula">
                                                <x-buttons.delete :action="route('admin.lessons.destroy', $lesson->id )"/>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($lessons) < 1)
                                <tr>
                                    <td colspan="11" class="px-4 py-3 text-center">
                                        <span class="text-gray-500">Nenhuma aula cadastrada!</span>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Média dos alunos') }}
            <x-admin-top-botao text="Voltar" link="{{ route('admin.discipline.index', ['ead' => $ead]) }}" class="ml-2" />
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
                                    Aluno
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Média do aluno
                                </th>
                                <th scope="col" width="150"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Criado em
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-2 ">
                                        <div class="text-sm text-gray-900">{{ $user->name }}</div>
                                    </td>
                                    @foreach ($notes as $item)
                                        @if ($item->user_id == $user->id)
                                            <td class="px-6 py-2 ">
                                                <div class="text-sm text-gray-900">
                                                    {{$item->count}}
                                                </div>
                                            </td>
                                        @endif
                                    @endforeach

                                   @if ($notes->count() == 0)
                                    <td class="px-6 py-2 ">
                                        <div class="text-sm text-gray-900">
                                            Nenhuma nota
                                        </div>
                                    </td>
                                   @endif

                                    <td class="px-6 py-2 ">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                        {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}</span>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($users) < 1)
                                <tr>
                                    <td colspan="5" class="px-6 py-3 text-center">
                                        <span class="text-gray-500">Nenhuma avaliação cadastrada!</span>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="p-5">{{ $users->appends(request()->query())->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

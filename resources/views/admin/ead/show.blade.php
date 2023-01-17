<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Alunos de Curso EAD') }}
            <x-admin-top-botao text="Voltar" link="{{ route('admin.ead.index') }}" class="ml-2" />
            <x-admin-top-botao text="Adicionar" link="{{ route('admin.ead.create') }}" />
        </h2>
    </x-slot>
    <div class="py-12">
        @if (session('msg'))
        <div class="max-w-7xl md:px-8 mx-auto">
            <div class="bg-green-600 rounded mb-4 px-4 py-2">
                <p class="text-white">{{session('msg')}}</p>
            </div>
        </div>
        @endif
        <div class="mb-2 px-4">
            <h1 class="max-w-7xl md:px-12 mx-auto text-xl text-black font-semibold leading-tight">Curso: {{$ead->title}}</h1>
            <p>&nbsp;</p>
        </div>
        <div class="mb-2 px-4">
            <h2 class="max-w-7xl md:px-12 mx-auto text-md text-black font-semibold leading-tight">AGUARDANDO APROVAÇÃO / INATIVOS</h2>
        </div>
        <div class="max-w-7xl mx-auto px-10">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg border border-gray-200">
                <div class="p-2">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Aluno
                                </th>

                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Email
                                </th>

                                <th scope="col" width="50"
                                    class="px-3 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Ativo
                                </th>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                                    width="50">
                                    Ação
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($disabledStudients as $disabledStudient)
                                @foreach ($disabledStudient->users as $item)
                                @if ($item->pivot->active == 0)
                                    <tr>
                                        <td class="px-3 py-2">
                                            <div class="text-sm text-gray-900">{{ $item->name }}</div>
                                        </td>
                                        <td class="px-3 py-2">
                                            <div class="text-sm text-gray-900">{{ $item->email }}</div>
                                        </td>
                                        <td class="px-3 py-2">
                                            <div class="text-sm text-gray-900">NÃO</div>
                                        </td>
                                        <td class="px-3 py-2 text-right text-sm font-medium">
                                            <div class="flex">
                                                <form action="{{route('admin.ead.active', ['idUser' => $item->id, 'idEad' => $disabledStudient->id])}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="mr-2">
                                                        <x-icons type="active"/>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                @endif
                                @endforeach
                            @endforeach
                            @if ($disabledStudients->count() == 0)
                                <tr>
                                    <td colspan="6" class="text-sm text-gray-700 p-4">Nenhum aluno aprovado</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    @if($disabledStudients->hasPages())
                        <div class="p-5">{{ $disabledStudients->appends(request()->query())->links() }}</div>
                    @endif
                </div>
            </div>
        </div>
        {{--AGUARDANDO APROVAÇÃO--}}
        <div class="mt-6 mb-0 px-4 py-2">
            <h1 class="max-w-7xl md:px-12 mb-0 mx-auto text-md text-black font-semibold leading-tight">APROVADOS / ATIVOS</h1>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg border border-gray-200">
                <div class="p-4">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Aluno
                                </th>

                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Email
                                </th>

                                <th scope="col" width="50"
                                    class="px-3 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Ativo
                                </th>
                                <th scope="col" width="50"
                                    class="px-3 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Ação
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($activeStudients as $activeStudient)
                                @foreach ($activeStudient->users as $item)
                                @if ($item->pivot->active == 1)
                                    <tr>
                                        <td class="px-3 py-2">
                                            <div class="text-sm text-gray-900">{{ $item->name }}</div>
                                        </td>
                                        <td class="px-3 py-2">
                                            <div class="text-sm text-gray-900">{{ $item->email }}</div>
                                        </td>
                                        <td class="px-3 py-2" width="50">
                                            <div class="text-sm text-gray-900">SIM</div>
                                        </td>
                                        <td class="px-3 py-2 text-right text-sm font-medium">
                                            <div class="flex">
                                                <form action="{{route('admin.ead.notActive', ['idUser' => $item->id, 'idEad' => $activeStudient->id])}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="mr-2">
                                                        <x-icons type="notActive"/>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                                @if ($activeStudients->count() == 0)
                                    <tr>
                                        <td colspan="6" class="text-sm text-gray-700 p-4">Nenhum aluno ativo</td>
                                    </tr>
                                @endif
                        </tbody>
                    </table>
                    @if($activeStudients->hasPages())
                        <div class="p-5">{{ $activeStudients->appends(request()->query())->links() }}</div>
                    @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

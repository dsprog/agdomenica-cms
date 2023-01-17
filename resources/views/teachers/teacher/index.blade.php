<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Professores') }}
            <x-admin-top-botao text="Adicionar" link="{{ route('teacher.teacher.create') }}" />
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
                                    Nome
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    E-mail
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
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $teacher->id }}</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $teacher->name }}</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $teacher->email }}</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                            {{ Carbon\Carbon::parse($teacher->published_at)->format('d/m/Y') }}</span>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex">
                                            <a href="{{ route('teacher.teacher.edit', $teacher) }}" class="mr-2">
                                                <x-icons type="edit" /></a>
                                            <form action="{{ route('teacher.teacher.destroy', $teacher->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="#"onclick="this.closest('form').submit();return false;">
                                                    <x-icons type="del" />
                                                </a>
                                         </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($teachers) < 1)
                                <tr>
                                    <td colspan="5" class="px-6 py-3 text-center">
                                        <span class="text-gray-500">Nenhum Professor cadastrado!</span>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="p-5">{{ $teachers->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-teacher-layout>

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Contatos') }}
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
                                    Nome
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    E-mail
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Telefone
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Assunto
                                </th>
                                <th scope="col" width="120"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Enviado em
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                                    width="100">
                                    Ação
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td class="px-6 py-2">
                                        <div class="text-sm text-gray-900">{{ $contact->name }}</div>
                                    </td>
                                    <td class="px-6 py-2">
                                        <div class="text-sm text-gray-900">{{ $contact->email }}</div>
                                    </td>
                                    <td class="px-6 py-2">
                                        <div class="text-sm text-gray-900">{{ $contact->phone }}</div>
                                    </td>
                                    <td class="px-6 py-2">
                                        <div class="text-sm text-gray-900">{{ $contact->subject }}</div>
                                    </td>
                                    <td class="px-6 py-2">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                            {{ \Carbon\Carbon::parse($contact->created_at)->format('d/m/Y') }}</span>
                                    </td>
                                    <td class="px-6 py-2 text-right text-sm font-medium">
                                        <div class="flex items-center">
                                            <a href="{{ route('admin.contacts.show', $contact) }}" class="mr-2" title="visualizar contato">
                                                <x-icons type="view"/>
                                            </a>
                                            <a href="#" title="excluir contato">
                                                <x-buttons.delete :action="route('admin.contacts.destroy', $contact->id)"/>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($contacts) < 1)
                                <tr>
                                    <td colspan="7" class="px-6 py-3 text-center">
                                        <span class="text-gray-500">Nenhum contato cadastrado!</span>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="p-5">{{ $contacts->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de banners') }}
            <x-admin-top-botao text="Adicionar" link="{{ route('admin.banners.create') }}" />
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
                                    Banner
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
                                <th scope="col" width="150"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Imagem
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                                    width="100">
                                    Ação
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($banners as $banner)
                                <tr>
                                    <td class="px-4 py-2">
                                        <div class="text-sm text-gray-900">{{ $banner->title }}</div>
                                    </td>
                                    <td class="px-4 py-2">
                                        <div class="text-sm text-gray-900">{{ $banner->active ? 'Sim' : 'Não' }}</div>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                            {{ $banner->published_at ? \Carbon\Carbon::parse($banner->published_at)->format('d/m/Y') : 'Não Expira' }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                            {{ $banner->expiration_date ? \Carbon\Carbon::parse($banner->expiration_date)->format('d/m/Y') : 'Não Expira' }}</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold text-green-800">
                                            <a href="{{ asset('uploads/'.$banner->image) }}" target="_blank" title="visualizar imagem">
                                                <x-icons type="img" /> Ver imagem
                                            </a>
                                        </span>
                                    </td>
                                    <td class="px-4 py-2 text-right text-sm font-medium">
                                        <div class="flex items-center">
                                            <a href="{{ route('admin.banners.edit', $banner) }}" class="mr-2" title="editar banner">
                                                <x-icons type="edit" />
                                            </a>
                                            <a href="#" title="excluir banner">
                                                <x-buttons.delete :action="route('admin.banners.destroy', $banner->id)"/>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($banners) < 1)
                                <tr>
                                    <td colspan="7" class="px-4 py-3 text-center">
                                        <span class="text-gray-500">Nenhum banner cadastrado!</span>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="p-5">{{ $banners->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

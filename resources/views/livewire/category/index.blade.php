<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Categorias') }}
            <a href="{{ route('products.categories.create') }}"
                class="-mt-2 float-right text-base bg-blue-600 text-white px-4 py-2 ">Adicionar</a>
        </h2>
    </x-slot>
    <div class="py-12 max-w-7xl mx-auto">
        @if (session()->has('success'))
            <div class="w-full px-4 py-2 border border-green-500 bg-green-500 text-white rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-10">
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
                            Categoria
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                            width="100">
                            Ação
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $category->id }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $category->name }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex">
                                    <a href="{{ route('products.categories.edit', $category) }}" class="mr-2">
                                        <x-icons type="edit" />
                                    </a>
                                    <livewire:category.delete :category="$category" :key="$category->id"/>
                                </div>
                            </td>
                        </tr>
                        @foreach ($category->subCategories as $subCategory)
                        <tr class="bg-gray-100">
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $subCategory->id }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">{{ $category->name }} &rarr; {{ $subCategory->name }}</td>
                            <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex">
                                    <a href="{{ route('products.categories.edit', $subCategory) }}" class="mr-2">
                                        <x-icons type="edit" />
                                    </a>
                                    <livewire:category.delete :category="$subCategory" :key="$subCategory->id"/>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @endforeach
                    @if (count($categories) < 1)
                        <tr>
                            <td colspan="3" class="px-6 py-3 text-center">
                                <span class="text-gray-500">Nenhuma categoria cadastrada!</span>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

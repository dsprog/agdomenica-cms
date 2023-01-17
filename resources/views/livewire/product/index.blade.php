<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Produtos') }}
            <a href="{{ route('products.create') }}"
                class="-mt-2 float-right text-base bg-blue-600 text-white px-4 py-2 ">Adicionar</a>
        </h2>
    </x-slot>
    <div class="py-12 max-w-7xl mx-auto">
        @include('flash-message')
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
                            Produto
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
                    @foreach ($products as $product)
                        <tr>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $product->id }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $product->name }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold text-green-800">
                                    {{ $product->category->name }}
                                </span>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex">
                                    <a href="{{ route('products.gallery', $product) }}" class="mr-2">
                                        <x-icons type="img" />
                                    </a>
                                    <a href="{{ route('products.edit', $product) }}" class="mr-2">
                                        <x-icons type="edit" />
                                    </a>
                                    <livewire:product.delete :product="$product" :key="$product->id"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @if (count($products) < 1)
                        <tr>
                            <td colspan="4" class="px-6 py-3 text-center">
                                <span class="text-gray-500">Nenhum produto cadastrado!</span>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="px-4 py-2">{{ $products->links() }}</div>
        </div>
    </div>
</div>

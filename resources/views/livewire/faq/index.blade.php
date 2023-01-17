<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Faq') }}
            <a href="{{ route('faq.create') }}"
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
                            Pergunta
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                            Criado em
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                            width="180">
                            Ação
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($faqs as $faq)
                        <tr>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $faq->id }}</div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $faq->question }}</div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold
                                        rounded-full bg-green-100 text-green-800">
                                    {{ $faq->created_at->format('d/m/Y H:i:s') }}
                                </span>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium" width="185">
                                <div class="flex">
                                    <a href="{{ route('faq.edit', $faq) }}" class="mr-2">
                                        <x-icons type="edit" />
                                    </a>
                                    <livewire:faq.delete :faq="$faq" :key="$faq->id"/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @if (count($faqs) < 1)
                        <tr>
                            <td colspan="4" class="px-6 py-3 text-center">
                                <span class="text-gray-600">Nenhum faq cadastrado!</span>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="px-4 py-2">{{ $faqs->links() }}</div>
    </div>
</div>

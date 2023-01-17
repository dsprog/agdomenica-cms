<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Matérias') }}
            <a href="{{ route('post.create') }}"
                class="-mt-2 float-right text-base bg-blue-600 text-white px-4 py-2 ">Adicionar</a>
        </h2>
    </x-slot>
    <div class="py-12 max-w-7xl mx-auto">
        <x-jet-banner />
        @include('flash-message')

        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-10">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider" width="50">
                            #
                        </th>
                        <th scope="col"class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                            Titulo
                        </th>
                        <th scope="col" width="150"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                            Imagem
                        </th>
                        <th scope="col" width="50"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                            Ativo
                        </th>
                        <th scope="col" width="150"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                            Publicar em
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider"
                            width="100">
                            Ação
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($posts as $post)
                        <tr>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $post->id }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $post->title }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold text-green-800">
                                    <a href="{{ asset('storage/'.$post->image) }}" target="_blank">
                                        <x-icons type="img" /> Ver imagem
                                    </a>
                                </span>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $post->status ? 'Sim' : 'Não' }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-gray-700
                                {{ $post->publish_at < now() ? 'bg-green-100' : 'bg-yellow-200' }}">

                                    {{ \Carbon\Carbon::parse($post->publish_at)->format('d/m/Y') }}</span>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap text-right text-sm font-medium">
                                <div class="flex">
                                    <a href="{{ route('post.edit', $post) }}" class="mr-2">
                                        <x-icons type="edit" />
                                    </a>
                                    <livewire:post.delete :post="$post" :key="$post->id" />
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @if (count($posts) < 1)
                        <tr>
                            <td colspan="6" class="px-6 py-3 text-center">
                                <span class="text-gray-500">Nenhum matéria cadastrada!</span>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="px-4 py-2">{{ $posts->links() }}</div>
        </div>
    </div>
</div>

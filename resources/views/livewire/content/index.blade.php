<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Conteúdo') }}
            <a href="{{ route('content.create') }}" class="-mt-2 float-right text-base bg-blue-600 text-white px-4 py-2 ">Adicionar</a>
        </h2>
    </x-slot>
    <div class="py-12 max-w-7xl mx-auto">
    @if(session()->has('success'))
    <div class="w-full px-4 py-2 border border-green-500 bg-green-500 text-white rounded mb-4">
        {{session('success')}}
    </div>
    @endif

    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-10">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="50">
                    #
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Titulo
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Criado em
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="180">
                    Ação
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

            @forelse($contents as $content)
                <livewire:content.content :content="$content" :key="$content->id"/>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-3 text-center">
                        <span class="text-gray-500">Nenhum conteúdo cadastrado</span>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="px-4 py-2">{{$contents->links()}}</div>
    </div>
</div>

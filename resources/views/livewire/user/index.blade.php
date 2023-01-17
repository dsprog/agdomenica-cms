<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
            <a href="{{ route('user.create') }}"
                class="-mt-2 float-right text-base bg-blue-600 text-white px-4 py-2 ">Adicionar</a>
        </h2>
    </x-slot>
    <div class="py-12 max-w-7xl mx-auto">
        @include('flash-message')

        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-10">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider" width="50">
                    #
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider" width="180">
                    Criado em
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider" width="100">
                    Ação
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

            @forelse($users as $user)
            <tr>
                <td class="px-6 py-3 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$user->id}}</div>
                </td>
                <td class="px-6 py-3 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$user->name}}</div>
                </td>
                <td class="px-6 py-3 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $user->email}}</div>
                </td>
                <td class="px-6 py-3 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        {{$user->created_at->format('d/m/Y H:i:s')}}
                    </span>
                </td>
                <td class="px-6 py-3 whitespace-nowrap text-right text-sm font-medium">
                    <div class="flex">
                        <a href="{{route('user.edit', $user)}}" class="mr-2"><x-icons type="edit" /></a>
                        <livewire:user.delete :user="$user" :key="$user->id"/>
                    </div>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="7" class="px-6 py-3 text-center">
                        <span class="text-gray-600">Nenhum Usuario cadastrado!</span>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="px-4 py-2">{{$users->links()}}</div>
    </div>
</div>

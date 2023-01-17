<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Alterar Usuário') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.users.index') }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.users.update', $user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="w-full mb-5">
                                <label class="block">Nome</label>
                                <x-jet-input name="name" type="text" value="{{ $user->name }}" />
                                <x-jet-input-error for="name" />
                            </div>
                            <div class="w-full mb-5">
                                <label class="block">E-mail</label>
                                <x-jet-input name="email" type="email" value="{{ $user->email }}" />
                                <x-jet-input-error for="email" />
                            </div>
                            <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

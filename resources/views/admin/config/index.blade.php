<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Configurações') }}
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.config.update', $config->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-5"></div>
                            <div class="grid md:grid-cols-5 gap-4">
                                <div class="w-full md:col-span-2">
                                    <label class="block">Endereço</label>
                                    <x-jet-input name="address" type="text" value="{{ $config->address }}" />
                                    <x-jet-input-error for="address" />
                                </div>
                                <div class="w-full md:col-span-1">
                                    <label class="block">Número</label>
                                    <x-jet-input name="address_number" type="text" value="{{ $config->address_number }}" />
                                    <x-jet-input-error for="address_number" />
                                </div>
                                <div class="w-full md:col-span-2">
                                    <label class="block">Complemento</label>
                                    <x-jet-input name="address_complement" type="text" value="{{ $config->address_complement }}" />
                                    <x-jet-input-error for="address_complement" />
                                </div>
                            </div>
                            <div class="mb-5"></div>
                            <div class="grid md:grid-cols-6 gap-4">
                                <div class="w-full md:col-span-2">
                                    <label class="block">Cidade</label>
                                    <x-jet-input name="address_city" type="text" value="{{ $config->address_city }}" />
                                    <x-jet-input-error for="address_city" />
                                </div>
                                <div class="w-full md:col-span-1">
                                    <label class="block">Estado</label>
                                    <x-jet-input name="address_state" type="text" value="{{ $config->address_state }}" />
                                    <x-jet-input-error for="address_state" />
                                </div>
                                <div class="w-full md:col-span-1">
                                    <label class="block">Cep</label>
                                    <x-jet-input name="address_cep" type="text" value="{{ $config->address_cep }}" />
                                    <x-jet-input-error for="address_cep" />
                                </div>
                                <div class="w-full md:col-span-2">
                                    <label class="block">E-mail</label>
                                    <x-jet-input name="email" type="text" value="{{ $config->email }}" />
                                    <x-jet-input-error for="email" />
                                </div>
                            </div>
                            <div class="mb-5"></div>
                            <div class="grid md:grid-cols-9 gap-4">
                                <div class="w-full md:col-span-3">
                                    <label class="block">Telefone 1</label>
                                    <x-jet-input name="phone" type="text" value="{{ $config->phone }}" />
                                    <x-jet-input-error for="phone" />
                                </div>
                                <div class="w-full md:col-span-3">
                                    <label class="block">Telefone 2</label>
                                    <x-jet-input name="phone2" type="text" value="{{ $config->phone2 }}" />
                                    <x-jet-input-error for="phone2" />
                                </div>
                                <div class="w-full md:col-span-3">
                                    <label class="block">Whatsapp</label>
                                    <x-jet-input name="whatsapp" type="text" value="{{ $config->whatsapp }}" />
                                    <x-jet-input-error for="whatsapp" />
                                </div>
                            </div>
                            <div class="mb-5"></div>
                            <div class="grid md:grid-cols-9 gap-4">
                                <div class="w-full md:col-span-3">
                                    <label class="block">Facebook</label>
                                    <x-jet-input name="facebook" type="text" value="{{ $config->facebook }}" />
                                    <x-jet-input-error for="facebook" />
                                </div>
                                <div class="w-full md:col-span-3">
                                    <label class="block">Instagram</label>
                                    <x-jet-input name="instagram" type="text" value="{{ $config->instagram }}" />
                                    <x-jet-input-error for="instagram" />
                                </div>
                                <div class="w-full md:col-span-3">
                                    <label class="block">Linkedin</label>
                                    <x-jet-input name="linkedin" type="text" value="{{ $config->linkedin }}" />
                                    <x-jet-input-error for="linkedin" />
                                </div>
                            </div>
                            <div class="mb-5"></div>
                            <input type="hidden" name="map" id="map" value="{{ $config->map }}">
                            <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

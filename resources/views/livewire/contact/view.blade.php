<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Contato') }}
            <a href="{{ route('leads.contact.index') }}" class="-mt-2 float-right text-base bg-blue-600 text-white px-4 py-2 ">Voltar</a>
        </h2>
    </x-slot>
    <div class="py-12 max-w-7xl mx-auto">
        @include('flash-message')

        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1 min-w-0">
                        <p class="mt-1 text-base leading-6 text-gray-500">
                            <strong>Nome:</strong> {{ $contact->name }}
                        </p>
                        <p class="mt-1 text-base leading-6 text-gray-500">
                            <strong>E-mail:</strong> {{ $contact->email }}
                        </p>
                        <p class="mt-1 text-base leading-6 text-gray-500">
                            <strong>Telefone:</strong> {{ $contact->phone }}
                        </p>
                        <p class="mt-1 text-base leading-6 text-gray-500">
                            <strong>Assunto:</strong> {{ $contact->subject }}
                        </p>
                        <p class="mt-1 text-base leading-6 text-gray-500">
                            <strong>Mensagem:</strong> <br>{!! nl2br($contact->message) !!}
                        </p>
                    </div>
                </div>
            </div>
    </div>
</div>

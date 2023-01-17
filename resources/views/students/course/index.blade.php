<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meus Cursos') }}
        </h2>
    </x-slot>

    <div class="py-12 sm:px-6 lg:px-8 overflow-hidden sm:rounded-lg">
        <div class="max-w-7xl mx-auto">
            @if ($myCourses->count() == 0)
                <h3>Você não tem nenhum curso</h3>
            @endif
            <div class="grid md:grid-cols-3 gap-4">
                @foreach ($myCourses as $myCourse)
                    @foreach ($myCourse->eads as $item)
                    <div class="col-span-1 p-6 mx-3 my-2 md:w-25 bg-gray-50 rounded-lg border border-gray-200 shadow-md">
                        <div>
                            <a href="{{route('studient.show', $item)}}">
                                <h5 class="mb-2 text-lg font-semibold tracking-tight capitalize text-gray-900 dark:white">{{$item->title}}</h5>
                            </a>
                            <p class="text-sm font-semibold text-green-600">Adquirido em
                                {{\Carbon\Carbon::parse($item->published_at)->format('d/m/Y')}}</p>
                                <p class="text-sm pb-3 font-semibold text-red-600">
                                    @if ($item->expiration_date != null)
                                    Expira em {{\Carbon\Carbon::parse($item->expiration_date)->format('d/m/Y')}}
                                    @else
                                        Não há data de Vencimento!
                                    @endif    
                                </p>
                            @if ($item->pivot->active == 0)
                            <button disabled class="cursor-not-allowed inline-flex items-center py-2 px-3 text-sm font-medium text-center text-black rounded-lg focus:ring-4 focus:outline-none bg-green-300 hover:bg-green-700 focus:ring-green-500">
                                Em aprovação
                                <x-icons type="lock"/>
                            </button>
                            @endif
                            <a href="{{route('studient.show', $item)}}" class="inline-flex items-center py-2 px-3 mr-2 text-sm font-medium text-center text-white rounded-lg bg-green-600 hover:bg-green-700 focus:ring-green-800">
                                Ir para o curso
                                <x-icons type="arrow-right"/>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</x-admin-layout>

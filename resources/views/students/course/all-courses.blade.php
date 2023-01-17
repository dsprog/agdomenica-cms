<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos os Cursos') }}
        </h2>
    </x-slot>

    <div class="py-12 sm:px-6 lg:px-8 overflow-hidden sm:rounded-lg">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-4">
                @foreach ($courses as $course)
                <div>
                    <div class="p-6 bg-gray-50 rounded-lg border border-gray-200 shadow-md">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-semibold tracking-tight capitalize text-gray-900 dark:white">{{$course->title}}</h5>
                        </a>
                        <p class="block text-sm font-semibold text-green-600">
                            Publicado em
                            {{\Carbon\Carbon::parse($course->created_at)->format('d/m/Y')}} <br>
                        </p>
                        <p class="text-sm pb-3 font-semibold text-red-600">
                            @if ($course->expiration_date != null)
                            Expira em {{\Carbon\Carbon::parse($course->expiration_date)->format('d/m/Y')}}
                            @else
                                Não há data de Vencimento!
                            @endif    
                        </p>
                        <a href="{{route('studient.show', $course)}}" class="inline-flex items-center py-2 px-3 mr-2 text-sm font-medium text-center text-white rounded-lg bg-green-600 hover:bg-green-700 focus:ring-green-800">
                            Ir para o curso
                            <x-icons type="arrow-right"/>
                        </a>
                        @foreach ($course->users as $item)
                            @if ($item->pivot->active == 0 && $item->pivot->user_id == Auth::user()->id)
                                <button disabled class="cursor-not-allowed inline-flex items-center py-2 px-3 text-sm font-medium text-center text-black rounded-lg focus:ring-4 focus:outline-none bg-green-300 hover:bg-green-700 focus:ring-green-500">
                                    Em aprovação
                                    <x-icons type="lock"/>
                                </button> 
                            @endif
                        @endforeach
                        @if ($item->pivot->ead_id != $course->id)
                            <form action="{{route('studient.store', ['ead_id' => $course->id])}}" method="POST" class="inline-flex items-center">
                                @csrf
                                <button type="submit" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-red-600 hover:bg-red-700 focus:ring-red-500">
                                    Inscreva-se
                                    <x-icons type="sing-up"/>
                                </button>
                            </form>
                        @endif
                    </div>  
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-admin-layout>

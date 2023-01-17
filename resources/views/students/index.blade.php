<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Meus Cursos') }}
        </h2>
    </x-slot>
        {{----Meus-Cursos----}}
    <div class="py-12 sm:px-6 lg:px-8 overflow-hidden sm:rounded-lg">
        <div class="max-w-7xl mx-auto">
            @if (session('msg'))
                <p class="mb-1 font-normal text-green-500">
                    {{session('msg')}}
                </p>
            @endif
            @if ($myCourses->count() == 0)
                <h3>Você não tem nenhum curso</h3>
            @endif
            <div class="grid md:grid-cols-3 gap-4">
                @foreach ($myCourses as $myCourse)
                @foreach ($myCourse->users as $item)
                @if ($item->pivot->ead_id == $myCourse->id && $item->pivot->user_id == Auth::user()->id)
                    <div class="col-span-1 p-6 mx-3 my-2 md:w-25 bg-gray-50 rounded-lg border border-gray-200 shadow-md">
                        <div>
                            <a href="{{route('studient.show', $myCourse)}}">
                                <h5 class="mb-2 text-lg font-semibold tracking-tight capitalize text-gray-900 dark:white">{{$myCourse->title}}</h5>
                            </a>
                            <p class="text-sm font-semibold text-green-600">Adquirido em
                                {{\Carbon\Carbon::parse($myCourse->published_at)->format('d/m/Y')}}
                            </p>
                            <p class="text-sm pb-3 font-semibold text-red-600">
                                @if ($myCourse->expiration_date != null)
                                Expira em {{\Carbon\Carbon::parse($myCourse->expiration_date)->format('d/m/Y')}}
                                @else
                                    Não há data de Vencimento!
                                @endif
                            </p>
                            @if ($item->pivot->active == 0 && $item->pivot->ead_id == $myCourse->id && $item->pivot->user_id == Auth::user()->id)
                                <button disabled class="cursor-not-allowed inline-flex items-center py-2 px-3 text-sm font-medium text-center text-black rounded-lg focus:ring-4 focus:outline-none bg-green-300 hover:bg-green-700 focus:ring-green-500">
                                    Em aprovação
                                    <x-icons type="lock"/>
                                </button>
                            @endif
                            <a href="{{route('studient.show', $myCourse)}}" class="inline-flex items-center py-2 px-3 mr-2 text-sm font-medium text-center text-white rounded-lg bg-green-600 hover:bg-green-700 focus:ring-green-800">
                                Ir para o curso
                                <x-icons type="arrow-right"/>
                            </a>
                        </div>
                    </div>
                @endif
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
    <div class="bg-white shadow border-y border-gray-300 py-6">
        <h1 class="max-w-7xl mx-auto text-xl text-black font-semibold leading-tight">Outros Cursos</h1>
    </div>
    {{-----Outros-Cursos-----}}
    <div class="py-12 sm:px-6 lg:px-8 overflow-hidden sm:rounded-lg">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-4">
                @foreach ($courses as $course)
                <div>
                    <div class="p-6 bg-gray-50 rounded-lg border border-gray-200 shadow-md">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-semibold tracking-tight capitalize text-gray-900 dark:white">{{$course->title}}</h5>
                        </a>
                        <p class="pb-3 block text-sm font-semibold text-green-600">
                            Publicado em
                            {{\Carbon\Carbon::parse($course->created_at)->format('d/m/Y')}} <br>
                            <span class="text-red-600">
                                @if ($course->expiration_date != null)
                                Expira em {{\Carbon\Carbon::parse($course->expiration_date)->format('d/m/Y')}}
                                @else
                                    Não há data de Vencimento!
                                @endif
                            </span>
                        </p>
                        <form action="{{route('studient.store', ['ead_id' => $course->id])}}" method="POST" class="inline-flex items-center">
                            @csrf
                            <button type="submit" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-red-600 hover:bg-red-700 focus:ring-red-500">
                                Inscreva-se
                                <x-icons type="sing-up"/>
                            </button>
                        </form>
                        <a href="{{route('studient.show', $course)}}" class="inline-flex items-center py-2 px-3 mr-2 text-sm font-medium text-center text-white rounded-lg bg-green-600 hover:bg-green-700 focus:ring-green-800">
                            Ir para o curso
                            <x-icons type="arrow-right"/>
                        </a>
                    </div>
                </div>
                @endforeach
                @if ($courses->count() == 0)
                    <div class="m-2 p-2 text-center font-semibold text-xl text-black leading-tight">
                        <h2>Não ha Cursos Disponiveis</h2>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>

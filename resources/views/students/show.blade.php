<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Curso') }}
        </h2>
    </x-slot>
    <div class="py-10 px-2">
        <div class="container mx-auto">
            <div class="max-w-7xl mx-auto bg-white rounded-md shadow border">
                <div class="p-4">
                    <span class="md:pt-1 md:pb-2 text-2xl font-semibold capitalize text-blue-500 inline-block">{{ $course->title }}</span><br>
                    <span class="md:pt-1 md:pb-2 text-1xl font-light text-gray-700 inline-block">{{ $course->resume }}</span><br>
                    <span class="text-green-600 font-bold md:px-2 inline-block">{{ \Carbon\Carbon::parse($course->published_at)->format('d/m/Y') }}</span><br>

                    @if ($approve->count() == 1)
                        <button disabled class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-black rounded-lg focus:ring-4 focus:outline-none bg-green-300 hover:bg-green-700 focus:ring-green-500 cursor-not-allowed">
                            Em Aprovação
                            <x-icons type="lock"/>
                        </button>
                    @endif
                <div class="border-t block py-4 mt-4">
                    <div id="accordion-arrow-icon" data-accordion="open">
                        @foreach ($disciplines as $discipline)
                        <div id="accordion-arrow-icon-heading-2">
                            <a href="#" class="block p-2 bg-gray-100 hover:bg-gray-200 border border-gray-200"
                                data-accordion-target="#accordion-arrow-icon-body-{{$discipline->id}}"
                                aria-expanded="false" aria-controls="accordion-arrow-icon-body-{{$discipline->id}}">

                                <svg data-accordion-icon="" class="w-6 h-6 shrink-0 float-left" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
                                </svg>
                                <h3 class="font-semibold inline-block ml-2">{{$discipline->title}}</h3>
                            </a>
                        </div>
                        <div id="accordion-arrow-icon-body-{{$discipline->id}}" class="hidden" aria-labelledby="accordion-arrow-icon-heading-2">
                            <div class="border border-gray-200 border-b-0">
                                @foreach ($discipline->lessons as $lesson)
                                    @if ($hasActive->count() == 1 && $lesson->active == true)
                                    <a href="{{route('studient.lessons.show',['ead' => $course->id, 'discipline' => $discipline->id, 'lesson' => $lesson->id])}}" class="block">
                                        <div class="border-b p-2 hover:bg-gray-200 pb-3">
                                            <p class="capitalize text-sm text-gray-800 leading-tight"><x-icons type="play" class="float-left mr-1"/> {{$lesson->title}}</p>
                                        </div>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>

                    @if($disciplines->count() == 0)
                        <p>Este Curso ainda não tem Aulas</p>
                    @endif

                    <a href="{{route('studient.index')}}">
                        <button class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-gray-500">
                        Voltar
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        </button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

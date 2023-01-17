<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Aulas: '.$course->title) }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @foreach ($lessons as $lesson)
            @if ($lesson->count() == 0)
                <p>Este curso ainda não nenhuma aula</p>
            @endif
            <div class="shadow bg-gray-50 rounded-lg border border-gray-200 mb-4">
                <div class="p-4 overflow-hidden">
                    <div class="w-5/6 float-left">
                        <a href="{{route('studient.lessons.lesson', $lesson->id)}}">
                            <p class="font-semibold text-xl text-gray-800 leading-tight">
                                Aula: {{$lesson->title}}<br>
                                <span class="text-sm">{!!$lesson->resume!!}</span>
                            </p>
                        </a>
                    </div>
                    <div class="w-1/6 float-left">
                        @foreach ($lesson->users as $item)
                            @if ($item->pivot->attended_class == 1)
                                <x-icons type="active"/>
                            @endif
                        @endforeach
                        @if($lesson->users->count() == 0)
                            <x-icons type="play"/>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-admin-layout>

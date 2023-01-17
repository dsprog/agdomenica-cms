<x-admin-layout>
    <x-slot name="header">
        <div class="font-semibold text-gray-800 leading-tight">
            <a href="{{route('studient.show', $course->ead)}}" class="inline-flex items-center py-2 px-3 mr-2 text-sm font-medium float-right text-white rounded-lg bg-gray-800 hover:bg-green-700 focus:ring-green-800 ">Voltar</a>
            <h2 class="text-xl">
                <strong class="text-2xl capitalize">{{$course->ead->title}}</strong>
            </h2>
            <p class="font-semibold capitalize text-base text-gray-800 leading-tight">
                {{$course->title}}
            </p>
        </div>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-5 my-4">
            <div class="p-6 mx-3 bg-gray-50 rounded-lg border border-gray-200 shadow-md">
                <div class="flex justify-between flex-wrap m-auto">
                    <div class="w-full bg-gray-200 p-2 lg:w-2/3">
                        <iframe class="w-full h-96" src="https://player.vimeo.com/video/{{$lesson->vimeo_id}}" style="background:#222"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="w-full lg:w-1/3 bg-gray-50">
                        <div class="p-4">
                            <h2 class="font-semibold mt-2 text-2xl text-gray-800 leading-tight w-full text-center uppercase p-2">Aulas</h2>
                            <ul class="border"  style="overflow-y:scroll; height:300px">
                            @foreach ($lessons as $item)
                                <a href="{{route('studient.lessons.show',['ead' => $course->ead->id, 'discipline' => $course->id, 'lesson' => $item->id])}}">
                                    <li class="hover:bg-gray-100 font-semibold capitalize text-base text-gray-800 leading-tight border-b-2 p-2">
                                        <p class="{{$lesson->id == $item->id ? 'text-green-600 font-bold':''}}">{{$item->title}}</p>
                                        @foreach ($item->users as $item)
                                            @if ($item->pivot->attended_class == 1)
                                            <span class="text-green-700 text-sm font-bold relative bottom-4 float-right">
                                                <x-icons type="active" class="inline-block w-5 h-5 text-white"/>
                                                assistido
                                            </span>
                                            @endif
                                        @endforeach
                                    </li>
                                </a>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="w-full md:w-2/3  bg-gray-100">
                        <div>
                            <h2 class="font-semibold text-2xl text-gray-800 leading-tight w-full  uppercase px-2 my-2">{{$lesson->title}}</h2>
                            <span class="text-green-600 text-sm font-bold px-2">
                                Expira em
                                {{ \Carbon\Carbon::parse($lesson->expiration_date)->format('d/m/Y') }}
                            </span>
                            <div class="m-2">
                                <p class="px-2 capitalize text-base text-gray-800 leading-tight">{!!$lesson->resume!!}</p>
                            </div>
                            @if ($lesson->download_url)
                            <div class="m-2 p-2 bg-gray-200 hover:bg-gray-300 w-40">
                                <a href="{{$lesson->download_url}}" target="_blank" title="material" class="text-blue-800">
                                    <svg class="w-6 h-6 float-left" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Material da aula
                                </a>
                            </div>
                            @endif
                            @if ($lesson->users->count() == 0)
                            <form action="{{route('studient.lessons.store', ['lesson_id' => $lesson->id])}}" method="post" class="p-4 w-full text-center">
                                @csrf
                                <button type="submit" class="py-1 px-6 m-auto inline-block text-lg font-medium text-center
                                text-white rounded-lg focus:ring-4 focus:outline-none bg-green-600
                                hover:bg-green-700 focus:ring-green-800">Já assisti</button>
                            </form>
                            @endif
                            @if (session('msg'))
                                <h2 class="font-semibold text-lg text-green-600 leading-tight text-center uppercase p-2">{{session('msg')}}</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

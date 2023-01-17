<x-app-layout>
    <div class="bg-gray-200 py-10 px-2">
        <div class="container mx-auto">
            <h2 class="text-center"><img src="{{ asset("site/cursos-rapidos.png")}}" width="476" height="96" class="mx-auto" alt="MBA CEGEA ESQLQ USP"></h2>
            <p class="text-center pt-5 pb-10"><strong>CONHEÇA NOSSOS TREINAMENTOS DE CURTA DURAÇÃO</strong></p>
            <div class="grid grid-flow-row-dense md:grid-cols-4 gap-2 md:gap-6">
                @foreach ($cursos as $curso)
                <div class="md:col-span-1 bg-white rounded-lg shadow p-3 md:p-0">
                    <a href="{{ route('site.curso',$curso->slug)}}"><img src="/uploads/{{ $curso->image }}" alt="" class="rounded-lg md:rounded-t-lg w-1/3 float-left md:w-full"></a>
                    <div class="pl-2 md:p-2 pb-4 md:text-center float-left w-2/3 md:w-full">
                        <span class="text-green-600 font-bold md:px-2 inline-block">{{ $curso->date_info }}</span><br>
                        <span class="md:pt-1 md:pb-2 font-bold text-gray-500 inline-block">{{ $curso->title }}</span><br>
                        <a href="{{route('site.curso', $curso->slug)}}" class="inline-block m-auto bg-primary text-white
                            rounded-md font-bold px-2 md:px-6 py-1 md:py-2 w-auto">SAIBA MAIS</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="px-4 py-2">{{ $cursos->links() }}</div>
        </div>
    </div>
</x-app-layout>

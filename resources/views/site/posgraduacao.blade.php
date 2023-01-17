<x-app-layout>
    @if($curso)
    <div class="top-int">
        <h1 class="container mx-auto text-white text-2xl italic py-8 px-3 md:px-0">{{ $curso->title }}</h1>
    </div>
    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 gap-6 py-10 px-2 md:px-0">
            <div>
                <img src="{{asset('uploads/' . $curso->image)}}" alt="" class="w-full">
                <h3 class="text-primary text-xl pt-4">INVESTIMENTO</h3>
                <div>
                    {!! $curso->investment !!}
                </div>
                @if ($curso->subscription)
                    <p class="pt-4"><a href="{{ $curso->subscription }}" target="_blank"
                        class="block md:inline-block text-center py-2 px-10 text-white rounded-lg bg-primary">INSCREVA-SE</a></p>
                @endif
                <h3 class="text-primary text-xl pt-4">PERÍODO</h3>
                <div>
                    {!! $curso->period !!}
                </div>
                <h3 class="text-primary text-xl pt-4">MAIS INFORMAÇÕES</h3>
                {!! $curso->more_info !!}
            </div>
            <div class="px-2 md:px-0">
                {!! $curso->body !!}
            </div>
        </div>
    </div>
    @else
    <div class="top-int">
        <h1 class="container mx-auto text-white text-2xl italic py-8 px-3 md:px-0">Cursos</h1>
    </div>
    <div class="container mx-auto py-20">
        <p>- Esse curso não foi encontrado ou não esta mais disponivel.</p>
        <p class="pt-4"><a href="{{ route('site.cursos') }}"
            class="inline-block py-2 px-10 text-white rounded-lg bg-primary">VER TODOS OS TREINAMENTOS</a></p>
    </div>
    @endif
</x-app-layout>

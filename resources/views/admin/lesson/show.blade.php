<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Aula - Curso EAD') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.lessons.index', ['ead' => $lesson->ead_id, 'discipline' => $lesson->discipline_id] ) }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">{{ $lesson->title }}</h2>
                        <hr>
                        <div class="grid grid-cols-2 gap-4 pt-2">
                            <div>
                                <p><strong>Ativo:</strong> {{ $lesson->active ? 'Sim' : 'Não' }}</p>
                                <p><strong>Data da publicação:</strong>
                                    {{ \Carbon\Carbon::parse($lesson->published_at )
                                        ->format('d/m/Y')}}</p>
                                <p><strong>Data de expiração:</strong>
                                    {{ $lesson->expiration_date ?
                                        \Carbon\Carbon::parse($lesson->expiration_date)
                                        ->format('d/m/Y') : 'Não Expira' }}</p>
                                <p><strong>Vimeo #id: </strong>{{ $lesson->vimeo_id }}</p>
                                <p><strong>Resumo:</strong></p>
                                {!! $lesson->resume !!}
                            </div>
                            <div>
                                <div style="padding:75% 0 0 0;position:relative;background:#000;">
                                    <iframe src="https://player.vimeo.com/video/{{ $lesson->vimeo_id }}?title=0&byline=0"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <script src="https://player.vimeo.com/api/player.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

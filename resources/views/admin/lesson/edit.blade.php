<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Aula') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.lessons.index', ['ead' => $lesson->id, 'discipline' => $lesson->discipline_id]) }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.lessons.update', $lesson->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="ead_id" value="{{ $lesson->ead_id }}">
                            <input type="hidden" name="discipline_id" value="{{ $lesson->discipline_id }}">

                            <div class="w-full mb-5">
                                <label class="block">Aula</label>
                                <x-jet-input name="title" type="text" value="{{ $lesson->title }}" />
                                <x-jet-input-error for="title" />
                            </div>
                            <div class="w-full mb-5">
                                <label class="block">Resumo da Aula</label>
                                <textarea name="resume" id="body" cols="30" rows="20">{{ $lesson->resume }}</textarea>
                                <x-jet-input-error for="body" />
                            </div>
                            <div class="w-full mb-5">
                                <label class="block">Link para Download de conteúdo</label>
                                <x-jet-input name="download_url" type="url" value="{{ $lesson->download_url }}" />
                                <x-jet-input-error for="download_url" />
                            </div>
                            <div class="w-full mb-5">
                                <label class="block">ID do Vídeo do Vimeo</label>
                                <x-jet-input name="vimeo_id" type="text" value="{{ $lesson->vimeo_id }}" />
                                <x-jet-input-error for="vimeo_id" />
                            </div>
                            <div class="mb-5"></div>
                            <div class="w-full md:w-2/5 mb-5">
                                <label class="block">Data da publicação</label>
                                <x-jet-input name="published_at" type="date" value="{{ $lesson->published_at }}" />
                                <x-jet-input-error for="published_at" />
                            </div>
                            <div class="w-full md:w-2/5 mb-5">
                                <label class="block">Data de expiração (não obrigatório)</label>
                                <x-jet-input name="expiration_date" type="date" value="{{ $lesson->expiration_date }}" />
                                <x-jet-input-error for="expiration_date" />
                            </div>
                            <div class="mb-5">
                                <label class="block">Ativo</label>
                                <input type="radio" name="active" value="1" {{ ($lesson->active == 1) ? 'checked':'' }}> Sim &nbsp;&nbsp;
                                <input type="radio" name="active" value="0" {{ ($lesson->active == 0) ? 'checked':'' }}> Não
                            </div>
                            <button class="text-base bg-blue-500 text-white px-4 py-2">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="https://cdn.tiny.cloud/1/dbi8ycp08fsdnpbz80l8j78wv9o3xrdqn2s377cst8urvpnk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: '#body',
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | fullscreen',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });
    </script>
    @endpush
</x-admin-layout>

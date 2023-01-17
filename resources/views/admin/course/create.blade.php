<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Adicionar Curso') }}
                <x-admin-top-botao text="Voltar" link="{{ route('admin.courses.index') }}" />
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.courses.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="w-full mb-5">
                                <label class="block">Curso</label>
                                <x-jet-input name="title" type="text" value="{{ old('title') }}" />
                                <x-jet-input-error for="title" />
                            </div>
                            <div class="w-full mb-5">
                                <label class="block">Data do curso - ex (00/00/0000 ou em breve etc)</label>
                                <x-jet-input name="date_info" type="text" value="{{ old('date_info') }}" />
                                <x-jet-input-error for="date_info" />
                            </div>
                            <div class="w-full mb-5">
                                <label class="block">Resumo</label>
                                <x-jet-input name="resume" type="text" value="{{ old('resume') }}" />
                                <x-jet-input-error for="resume" />
                            </div>
                            <div class="w-full mb-5">
                                <label class="block">Inscrição</label>
                                <x-jet-input name="subscription" type="text" value="{{ old('subscription') }}" />
                                <x-jet-input-error for="subscription" />
                            </div>
                            <div class="w-full">
                                <label class="block">Período</label>
                                <textarea name="period" id="period" cols="30" rows="10">{{ old('period') }}</textarea>
                                <x-jet-input-error for="period" />
                            </div>
                            <div class="mb-5"></div>
                            <div class="w-full">
                                <label class="block">Investimento</label>
                                <textarea name="investment" id="investment" cols="30" rows="10">{{ old('investment') }}</textarea>
                                <x-jet-input-error for="investment" />
                            </div>
                            <div class="mb-5"></div>
                            <div class="w-full">
                                <label class="block">Mais informações</label>
                                <textarea name="more_info" id="more_info" cols="30" rows="10">{{ old('more_info') }}</textarea>
                                <x-jet-input-error for="more_info" />
                            </div>
                            <div class="mb-5"></div>
                            <div class="w-full">
                                <label class="block">Descrição</label>
                                <textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
                                <x-jet-input-error for="body" />
                            </div>
                            <div class="mb-5"></div>
                            <div class="mb-5">
                                <label class="block">Imagem (medida 500x500)</label>
                                <x-jet-input name="image" type="file" />
                                <x-jet-input-error for="image" />
                            </div>
                            <div class="w-full md:w-2/5 mb-5">
                                <label class="block">Data da publicação</label>
                                <x-jet-input name="published_at" type="date" value="{{ old('published_at') }}" />
                                <x-jet-input-error for="published_at" />
                            </div>
                            <div class="mb-5">
                                <label class="block">Ativo</label>
                                <input type="radio" name="active" value="1" checked> Sim &nbsp;&nbsp;
                                <input type="radio" name="active" value="0"> Não
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
        selector: '#period, #more_info, #body, #investment',
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

<x-admin-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Empresa') }}
                </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    <div class="p-8">
                        <form action="{{ route('admin.about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-5"></div>
                            <div class="w-full">
                                <label class="block">Resumo</label>
                                <textarea name="resume" id="resume" cols="30" rows="10">{{ $about->resume }}</textarea>
                                <x-jet-input-error for="resume" />
                            </div>
                            <div class="mb-5"></div>
                            <div class="w-full">
                                <label class="block">Descrição</label>
                                <textarea name="about" id="about" cols="30" rows="10">{{ $about->about }}</textarea>
                                <x-jet-input-error for="about" />
                            </div>
                            <div class="mb-5"></div>
                            <div class="mb-5">
                                <label class="block">Imagem -
                                    <a href="{{ asset('uploads/'.$about->image)}}" target="_blank" class="text-blue-500">visualizar</a></label>
                                <x-jet-input name="image" type="file" />
                                <x-jet-input-error for="image" />
                            </div>
                            <div class="mb-5">
                                <label class="block">Imagem 2 - interna -
                                    <a href="{{ asset('uploads/'.$about->image2)}}" target="_blank" class="text-blue-500">visualizar</a></label>
                                <x-jet-input name="image2" type="file" />
                                <x-jet-input-error for="image2" />
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
        selector: '#resume, #about',
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

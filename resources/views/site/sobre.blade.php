<x-app-layout>
    <div class="top-int">
        <h1 class="container mx-auto"><img src="{{ asset("site/sobre-nos.jpg") }}" alt="Conheça a Cegea "></h1>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-2 gap-6 py-10 px-2 md:px-0 content-end">
            <div>
                <p class="py-2 text-sm">{!!$about->about!!}</p>
            </div>
            <div class="align-bottom">
                <img src="{{ url('/uploads/'.$about->image) }}" alt="imagens ecológicas" class="mb-4 mx-auto">
                <img src="{{ url('/uploads/'.$about->image2) }}" alt="imagens ecológicas" class=" mx-auto">
            </div>
        </div>
    </div>
</x-app-layout>

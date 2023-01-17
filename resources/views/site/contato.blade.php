<x-site-layout>
    @section('title', 'Contato - ')
    @section('content')
    <main>
        <div id="contato" class="py-10 px-5">
            <h1 class="text-verde3 text-center font-semibold text-3xl md:text-3xl">Contato</h1>
            <div class="container pt-10 pb-2">
                @livewire('contact.form')
                <div class="py-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.609648188833!2d-47.57886238445107!3d-22.7427458377571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c62f9071fbea6f%3A0x754234b12f322e8f!2sEstr.%20Vicente%20Bellini%20-%20Concei%C3%A7%C3%A3o%2C%20Piracicaba%20-%20SP%2C%2013427-225!5e0!3m2!1spt-BR!2sbr!4v1631276224128!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </main>
    @endsection
</x-site-layout>

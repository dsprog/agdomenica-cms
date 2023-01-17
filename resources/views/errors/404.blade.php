<x-app-layout>
    <div class="top-int">
        <h1 class="container mx-auto text-white text-2xl italic py-8 px-3 md:px-0">Erro 404 - Página não encontrada!</h1>
    </div>
    <div class="container mx-auto py-4 md:py-6">
        <p><strong>Links úteis</strong><br>
            <a href="{{route('site.sobre')}}">&bull; Conheça a cegea</a><br>
            <a href="{{route('site.posgraduacao')}}">&bull; Confira nosso curso de pós-graduação</a><br>
            <a href="{{route('site.cursos')}}">&bull; Confira nossos cursos</a><br>
            <a href="{{route('site.contato')}}">&bull; Entre em contato conosco</a><br>
        </p>
    </div>
</x-app-layout>

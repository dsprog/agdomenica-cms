<footer>
    <div class="foot">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-2 p-2">
                <div class="md:col-span-2">
                    <img src="{{ asset('site/images/ah-natu.svg') }}" class="logo" alt="Ah! Natu">
                </div>
                <div>
                    <nav>
                        <a href="{{ route('home') }}">Home</a>
                        <a href="acessorios.php">Acessórios</a>
                        <a href="{{ route('quem-somos') }}">Quem Somos</a>
                        <a href="blog.php">Blog</a>
                        <a href="{{ route('contato') }}">Contato</a>
                    </nav>
                </div>
                <div>
                    <nav>
                        <a href="{{ route('seja-parceiro') }}">AH! Natu na sua loja</a>
                        <a href="{{ route('lojas-fisicas') }}">Lojas Físicas</a>
                        <a href="{{ route('lojas-online') }}">Lojas Online</a>
                        <a href="{{ route('sac') }}">SAC</a>
                        <a href="{{ route('faq') }}">FAQ</a>
                    </nav>
                </div>
                <div>
                    <a href="tel:1934291199" target="_blank" class="ico1">(19) 3429-1199</a>
                    <a href="contato.php" target="_blank" class="ico2">Estr. Vicente Bellini <br>
                        Conceição, Piracicaba <br> SP, 13427-230</a>
                    <a href="https://www.instagram.com/ahnatu/" target="_blank" class="ico3" title="instagram"></a>
                    <a href="https://www.facebook.com/ahnatu.alimentos" target="_blank" class="ico4" title="facebook"></a>
                    <a href="https://www.youtube.com/channel/UChcJ4fvhxto0HjQrtgP1vSQ" target="_blank" class="ico5" title="youtube"></a>
                    <a href="#" target="_blank" class="ico6" title="linkedin"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="ass p-2">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                <div class="text-center md:text-left">AH! NATU - Todos os direitos reservados - 2021</div>
                <div class="text-center md:text-right">Desenvolvido por: <a href="http://dsprog.com.br" target="_blank" class="text-green-700">Dsprog</a></div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('site/alpine.js') }}"></script>
<script src="{{ asset('site/custom.js') }}"></script>

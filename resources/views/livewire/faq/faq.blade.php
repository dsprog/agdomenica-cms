<div id="faq">
    <h1 class="text-verde3 text-center font-semibold text-3xl md:text-3xl mb-2">FAQ</h1>
    <div class="container">
        <p class="text-marrom1 text-center text-xl md:text-lg font-semibold py-10 md:w-4/5 m-auto">
        Veja algumas respostas a perguntas frequentes dos consumidores de AH!Natu e se não
        encontrar sua dúvida, fique à vontade para entrar em contato por algum dos nossos canais.</p>
        @foreach($faqs as $faq)
        <!-- item -->
        <div x-data=" {isOpen : false}" class="py-4 px-4 bg-verde3 mb-2 rounded-xl">
        <div @click="isOpen = !isOpen"
            class="flex items-center justify-between cursor-pointer text-white">
            <span class="text-lg font-bold">{{ $faq->question }}</span>
            <div>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                :class="{'transform rotate-180' : isOpen}">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>
        <div x-show.transition.duration.20ms.origin.bottom="isOpen" x-cloak @click.away="isOpen = false"
            class="pt-3 text-sm text-neutral bg-black bg-opacity-10 m-2 p-3 rounded-xl resposta">
            <span class="text-base font-light text-white">{{ $faq->answer }}</span>
        </div>
        </div>
        <!-- end of item -->
        @endforeach
    </div>
</div>

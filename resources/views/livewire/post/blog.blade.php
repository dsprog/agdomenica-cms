<div id="blog" class="px-10">
    <h1 class="text-verde3 text-center font-semibold text-2xl md:text-3xl">Blog</h1>
    <div class="container pt-8 md:pt-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($posts as $post)
            <div class="blog-card border rounded-2xl" style="background-image: url('{{ asset('storage/'.$post->image) }}');"
                x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false">
                <div class="blog-card-overlay rounded-2xl p-2 md:p-5 flex flex-wrap content-center"
                    :class="{ 'block' : open , 'block md:hidden' : !open}">
                    <h4 class="text-black pb-3 text-lg md:text-2xl font-semibold">{{ $post->title }}</h4>
                    <p class="text-black md:text-lg">{{ $post->resume }}</p>
                    <p class="contents"><a href="{{ route('post.view', $post->slug) }}" class="bg-marrom2
                        hover:bg-marrom1 py-2 md:py-3 px-7 md:text-lg font-semibold text-white rounded-full
                        table mx-auto mt-5">Ver mais</a></p>
                </div>
            </div>
            @endforeach
            <!-- fim posts -->
        </div>
        <div class="paginacao text-center">
            <div class="flex flex-col items-center my-12">
                <div class="flex text-marrom1">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>


    </div>
</div>

@foreach ($posts as $post)
<div class="blog-card border rounded-2xl" style="background-image: url('{{ asset('storage/'.$post->image) }}');"
    x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false">
    <div class="blog-card-overlay rounded-2xl p-5 flex flex-wrap content-center" :class="{ 'block' : open , 'block md:hidden' : !open}">
        <h4 class="text-black pb-3 text-lg md:text-2xl font-semibold">{{ $post->title }}</h4>
        <p class="text-black md:text-lg">{{ $post->resume }}</p>
        <p class="contents"><a href="{{ route('post.view', $post->slug) }}" class="bg-marrom2 hover:bg-marrom1 py-2
            md:py-3 px-7 md:text-lg font-semibold text-white rounded-full table mx-auto mt-5">Ver mais</a></p>
    </div>
</div>
@endforeach

</div>
@section('title', $post->title . ' | blog | ')
@section('content')
<div id="post" class="px-10">
    <div class="container py-20">
        <h1 class="text-marrom2 pb-5 text-2xl font-semibold">{{$post->title}}</h1>
        {{$post->content}}
        <!-- fim post -->
    </div>
</div>
@endsection
<div>

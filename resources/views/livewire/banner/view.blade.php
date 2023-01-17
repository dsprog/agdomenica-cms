<div class="splide__track">
    <ul class="splide__list">
        @foreach ($banners as $banner)
        <li class="splide__slide">
            <img src="{{ asset('storage/'.$banner->image) }}" width="1920" height="840" class="max-w-full hidden md:block" alt="{{$banner->name}}">
            <img src="{{ asset('storage/'.$banner->image_mobile) }}" width="800" height="400" class="max-w-full block md:hidden" alt="{{$banner->name}}">
        </li>
        @endforeach
    </ul>
</div>

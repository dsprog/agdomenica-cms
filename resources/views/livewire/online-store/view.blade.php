@foreach($onlinestores as $onlinestore)
<div class="col-span-1">
    <a href="{{ $onlinestore->url }}" target="_blank" class="mb-5 inline-block">
        <img width="338" height="182" class="rounded-xl w-full hover:border hover:border-gray-400 hover:shadow-md"
         src="{{ asset('storage/'.$onlinestore->logo) }}" alt="Comprar no(a) {{ $onlinestore->name }}"></a>
</div>
@endforeach

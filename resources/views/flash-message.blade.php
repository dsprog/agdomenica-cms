@if(session()->has('success'))
    <div class="w-full px-4 py-2 border border-green-500 bg-green-500 text-white rounded mb-4">
        {{session('success')}}
    </div>
@endif

@if(session()->has('error'))
<div class="w-full px-4 py-2 border border-red-500 bg-red-500 text-white rounded mb-4">
    {{session('error')}}
</div>
@endif

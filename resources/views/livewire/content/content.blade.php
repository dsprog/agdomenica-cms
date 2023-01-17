<tr>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$content->id}}</div>
    </td>

    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$content->title}}</div>
    </td>

    <td class="px-6 py-4 whitespace-nowrap">
        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
            {{$content->created_at->format('d/m/Y H:i:s')}}
        </span>
    </td>

    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium" width="185">
        <div class="flex">
            <a href="{{route('content.edit', $content)}}"
               class="px-2 py-1 border border-blue-600 bg-blue-600 text-white rounded mr-2">Editar</a>
            <livewire:content.delete :content="$content" :key="$content->id"></livewire:content.delete>
        </div>
    </td>
</tr>

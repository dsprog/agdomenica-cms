@props(['action'])

<div x-data="{ initial: true, deleting: false }" class="text-sm flex items-center">
    <button
        x-on:click.prevent="deleting = true; initial = false"
        x-show="initial"
        x-on:deleting.window="$el.disabled = true"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        class="text-white p-1 rounded hover:bg-red-100 dark:hover:bg-red-100 disabled:opacity-50"
    >
        <x-icons type="del" />
    </button>

    <div
        x-show="deleting"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        class="flex items-center space-x-3 p-1 w-40"
    >
        <form x-on:submit="$dispatch('deleting')" method="post" action="{{ $action }}">
            @csrf
            @method('delete')

            <button
                x-on:click="$el.form.submit()"
                x-on:deleting.window="$el.disabled = true"
                type="submit"
                class="text-white p-1 rounded bg-red-600 hover:bg-red-700 dark:bg-red-500 dark:hover:bg-red-600 disabled:opacity-50"
            >
                @lang('Confirmar')
            </button>

            <button
                x-on:click.prevent="deleting = false; setTimeout(() => { initial = true }, 150)"
                x-on:deleting.window="$el.disabled = true"
                class="text-white p-1 rounded bg-gray-600 hover:bg-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600 disabled:opacity-50"
            >
                @lang('Cancelar')
            </button>
        </form>
    </div>
</div>
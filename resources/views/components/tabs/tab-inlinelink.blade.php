@props(['name'])

<a
    @click.prevent="tab = '{{ $name }}'"
    href="#"
    class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
    :class="{ 'border-purple-500 text-purple-600': tab === '{{ $name }}' }"
>
    {{ $slot }}
</a>


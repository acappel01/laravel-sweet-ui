@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mt-1 bg-purple-500 text-white text-sm group flex items-center px-6 py-3 text-sm font-medium rounded-md'
            : 'mt-1 text-sm text-gray-400 group flex items-center px-6 py-3 text-sm font-medium rounded-md hover:bg-purple-500 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

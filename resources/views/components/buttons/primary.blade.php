@props(['title', 'target'])

<a href="{{ $target }}" {{ $attributes->merge(['class' => 'h-12 px-6 rounded-full bg-brand text-white text-base font-medium font-display inline-flex items-center leading-none cursor-pointer transition-colors duration-300 border border-brand hover:bg-white hover:text-gray-800']) }}>
    {{ $title }}
</a>

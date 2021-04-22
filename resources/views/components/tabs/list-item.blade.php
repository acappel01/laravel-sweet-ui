@props(['label', 'count' => null, 'sep' => true, 'current' => false])
<li>
    <a {{ $attributes }} class="font-medium leading-none cursor-pointer
        @if($current) text-brand
        @else text-gray-500 hover:text-brand
        @endif
    ">
        {{ $label }}
        @if($count) ({{ $count }})@endif
    </a>
    @if($sep)
        <span class="text-gray-300 inline-block mx-2">|</span>
    @endif
</li>

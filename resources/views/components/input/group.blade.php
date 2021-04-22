@props(['label', 'for', 'cols' => 6, 'error' => false])

<div {{ $attributes->merge(['class' => 'grid grid-cols-6 gap-6']) }}>
    <div class="col-span-6 sm:col-span-{{ $cols }}">
        @if(isset($label))
        <label for="{{ $for }}">
            {{ __($label) }}
        </label>
        @endif
        <div class="mt-1">
            {{ $slot }}
        </div>
        @if($error)
            <p class="mt-2 text-sm text-red-600">
                {{ $error }}
            </p>
        @endif
    </div>
</div>

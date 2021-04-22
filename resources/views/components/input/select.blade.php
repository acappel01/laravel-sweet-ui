@props([
    'label',
    'for',
    'placeholder' => '',
    'options' => [],
    'error' => false,
])
<label for="{{ $for }}" class="block text-sm font-medium text-gray-700">
    {{ __($label) }}
</label>
<select {{ $attributes }} id="{{ $for }}"
    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    <option selected value="">-- {{ $placeholder ?? 'Select a ' . $label ?? '' }} --</option>
    @foreach($options as $key => $option)
        @if(is_scalar($key) && is_scalar($option))
            <option value="{{ $key }}">{{ $option }}</option>
        @else
            <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endif
    @endforeach
</select>
@if($error)
    <p class="mt-2 text-sm text-red-600">
        {{ $error }}
    </p>
@endif
{{ $slot }}

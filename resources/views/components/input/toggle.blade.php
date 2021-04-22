@props(['on' => false, 'name','label' => null, 'description' => null])
<div x-data="{ on: '{{ $on }}' }" class="flex items-center justify-between">
    <input type="checkbox" class="hidden" wire:model="{{ $name }}" />
    @if ($label && $description)
    <span class="flex-grow flex flex-col" id="toggleLabel">
        <span class="text-sm font-medium text-gray-900">{{ $label }}</span>
        <span class="text-sm leading-normal text-gray-500">{{ $description }}</span>
    </span>
    @endif
    <button
        type="button"
        :class="{ 'bg-gray-200': !on, 'bg-green-500': on }"
        @click="on = !on"
        wire:click="toggle('{{ $name }}')"
        {{ $attributes }}
        :aria-pressed="on.toString()"
        aria-pressed="false"
        aria-labelledby="privacy-option-label-1"
        aria-describedby="privacy-option-description-1"
        class="ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500 bg-gray-200">
            <span class="sr-only">Use setting</span>
            <span
                aria-hidden="true"
                :class="{ 'translate-x-5': on, 'translate-x-0': !on }"
                class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-0">
            </span>
    </button>
</div>

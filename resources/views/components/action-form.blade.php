@props(['action', 'button', 'click' => '', 'cancelClick' => ''])

<form wire:submit.prevent="{{ $action }}">
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white sm:p-6 space-y-6">
            {{ $slot }}
        </div>

        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            @if($cancelClick)
                <a @click="{{ $cancelClick }}" class="cursor-pointer mr-4">
                    Cancel
                </a>
            @endif
            <button
                @click="{{ $click }}"
                type="submit"
                class="h-12 px-6 rounded-lg bg-brand text-white text-base font-medium font-display inline-flex items-center leading-none cursor-pointer transition-colors duration-300 border border-brand hover:bg-white hover:text-gray-800">
                <div class="inline-flex justify-center items-center" wire:loading wire:target="{{ $action }}">
                    <svg class="animate-spin mx-1 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
                <div wire:loading.attr="disabled">
                    {{ __($button) }}
                </div>
            </button>
        </div>
    </div>
</form>

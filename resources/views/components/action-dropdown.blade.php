<div {{ $attributes->merge(['class' => 'relative inline-block text-left']) }} x-data="{ open: false }">
  <div>
    <button @click="open = ! open" @click.away="open = false" @close.stop="open = false" class="rounded-full flex items-center text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="options-menu" aria-haspopup="true" aria-expanded="true">
      <span class="sr-only">Open options</span>
      <!-- Heroicon name: dots-vertical -->
      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
      </svg>
    </button>
  </div>
  <div
    x-show="open"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5"
    @click="open = false">
    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
      {{ $slot }}
    </div>
  </div>
</div>

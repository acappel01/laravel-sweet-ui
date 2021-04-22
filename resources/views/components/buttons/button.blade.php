<button {{ $attributes->merge(['type' => 'submit', 'class' => 'h-12 px-6 rounded-lg bg-brand text-white text-base font-medium font-display inline-flex justify-center items-center leading-none cursor-pointer transition-colors duration-300 border border-brand hover:bg-white hover:text-gray-800']) }}>
    {{ $slot }}
</button>

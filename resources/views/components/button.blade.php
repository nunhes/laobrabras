<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-cyan-600 border border-transparent rounded-none font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-400 active:bg-cyan-500 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-yellow-400 border border-yellow-400 rounded-md font-semibold text-xs text-grey-700 uppercase tracking-widest shadow-sm hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

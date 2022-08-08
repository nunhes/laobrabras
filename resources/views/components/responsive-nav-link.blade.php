@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-gray-50 text-base font-medium text-gray-900 bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 focus:border-gray-50 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-100 hover:text-gray-900 hover:border-gray-900 focus:outline-none focus:text-gray-900 focus:bg-gray-50 focus:border-gray-50 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

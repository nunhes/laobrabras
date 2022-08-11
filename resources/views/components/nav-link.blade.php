@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-gray-900 text-sm font-large leading-5 uppercase text-gray-900 focus:outline-none focus:border-gray-900 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-large leading-5 uppercase text-slate-50 hover:text-gray-900 hover:border-gray-900 focus:outline-none focus:text-gray-900 focus:border-sky-900 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-slate-600 text-sm font-large leading-5 uppercase text-slate-600 focus:outline-none focus:border-slate-600 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-large leading-5 uppercase text-slate-50 hover:text-slate-600 hover:border-slate-600 focus:outline-none focus:text-slate-500 focus:border-sky-900 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

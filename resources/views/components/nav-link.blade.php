@props(['active' => false])

@php
$classes = ($active ?? false)
            ? 'text-[11px] font-black uppercase tracking-widest text-brand-emerald transition-all duration-300'
            : 'text-[11px] font-bold uppercase tracking-widest text-brand-charcoal/40 hover:text-brand-charcoal transition-all duration-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

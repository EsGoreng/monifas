@props([
    'type' => 'button',
    'variant' => 'primary',
])

@php
    $baseClasses = 'inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none disabled:opacity-50';

    $variantClasses = match ($variant) {
        'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
        'outline'   => 'border border-border bg-background text-foreground hover:bg-secondary',
        default     => 'bg-primary text-primary-foreground hover:bg-primary/90',
    };
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => $baseClasses . ' ' . $variantClasses]) }}
>
    {{ $slot }}
</button>

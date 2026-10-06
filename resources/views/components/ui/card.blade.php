@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->merge(['class' => 'rounded-xl border border-border bg-background shadow-sm']) }}>
    {{ $slot }}
</{{ $tag }}>

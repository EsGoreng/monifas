@props(['name', 'role', 'quote'])

<x-ui.card tag="figure" class="p-5">
    <blockquote class="text-sm text-muted-foreground">&ldquo;{{ $quote }}&rdquo;</blockquote>
    <figcaption class="mt-4 flex items-center gap-3">
        <span class="flex h-8 w-8 items-center justify-center rounded-full bg-primary text-xs font-bold text-primary-foreground">{{ substr($name, 0, 1) }}</span>
        <span class="text-xs"><span class="block font-semibold">{{ $name }}</span><span class="text-muted-foreground">{{ $role }}</span></span>
    </figcaption>
</x-ui.card>

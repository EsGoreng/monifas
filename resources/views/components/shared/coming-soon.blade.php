@props([
    'title' => 'Feature Coming Soon',
    'module' => null,
    'description' => 'This feature is currently under active development and will be available soon.',
])

<div class="flex min-h-[60vh] flex-col items-center justify-center text-center px-4">
    <div class="mx-auto max-w-md space-y-5">
        <!-- Icon Container -->
        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl border border-border bg-muted/40 text-primary shadow-xs">
            <x-lucide-construction class="h-8 w-8 text-primary" />
        </div>

        <!-- Module Badge -->
        @if ($module)
            <div class="inline-flex items-center gap-1.5 rounded-full border border-border bg-secondary/60 px-3 py-1 text-xs font-medium text-muted-foreground">
                <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                <span>{{ $module }}</span>
            </div>
        @endif

        <!-- Text Header -->
        <div class="space-y-2">
            <h1 class="text-2xl font-bold tracking-tight text-foreground sm:text-3xl">
                {{ $title }}
            </h1>
            <p class="text-sm text-muted-foreground leading-relaxed">
                {{ $description }}
            </p>
        </div>

        <!-- Status Card -->
        <div class="pt-2">
            <div class="inline-flex items-center gap-2 rounded-lg border border-dashed border-border bg-muted/30 px-4 py-2.5 text-xs text-muted-foreground">
                <x-lucide-clock class="h-4 w-4 text-muted-foreground" />
                <span>Feature in active development &bull; Stay tuned for upcoming updates</span>
            </div>
        </div>
    </div>
</div>

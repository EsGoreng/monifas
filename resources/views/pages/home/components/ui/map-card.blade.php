<div class="mx-auto mt-10 grid max-w-4xl gap-4 rounded-2xl border border-border bg-background p-4 text-left shadow-lg md:grid-cols-3">
    <div class="relative min-h-56 overflow-hidden rounded-xl bg-secondary md:col-span-2">
        <div class="absolute left-3 top-3 text-xs font-semibold">Kondisi Real-Time Jakarta &amp; Sekitarnya</div>
        <div class="absolute inset-0 flex items-center justify-center">
            <span class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-primary-foreground shadow-lg">
                <x-lucide-map-pin class="h-6 w-6" />
            </span>
        </div>
        <div class="absolute bottom-3 left-3 rounded-md bg-background px-2 py-1 text-[11px] text-muted-foreground">Terakhir diperbarui: baru saja</div>
    </div>
    <div class="flex flex-col justify-between gap-4">
        <div>
            <p class="text-xs text-muted-foreground">Terselesaikan Bulan Ini</p>
            <p class="text-4xl font-bold">4,280</p>
            <div class="mt-3 flex h-12 items-end gap-1">
                @foreach ([30, 45, 40, 60, 75, 100] as $h)
                    <span class="flex-1 rounded-sm bg-primary/70" style="height: {{ $h }}%"></span>
                @endforeach
            </div>
        </div>
        <div class="flex items-center gap-2 rounded-lg bg-secondary p-2 text-xs">
            <x-lucide-circle-check class="h-4 w-4 text-primary" />
            <span>Perbaikan Lampu PJU Sudirman selesai</span>
        </div>
    </div>
</div>

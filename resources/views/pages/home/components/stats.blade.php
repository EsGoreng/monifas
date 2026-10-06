<section class="mx-auto max-w-6xl px-4 pb-20">
    <div class="grid grid-cols-2 gap-6 text-center md:grid-cols-4">
        @foreach ([['18,420+', 'Laporan Ditangani'], ['99.1%', 'Kecepatan Data'], ['34', 'Kota &amp; Wilayah Terhubung'], ['4.9/5.0', 'Kepuasan Warga']] as [$val, $label])
            <div>
                <p class="text-2xl font-bold">{{ $val }}</p>
                <p class="text-xs text-muted-foreground">{!! $label !!}</p>
                <div class="mx-auto mt-2 h-1 w-full rounded-full bg-secondary"><div class="h-1 w-3/4 rounded-full bg-primary"></div></div>
            </div>
        @endforeach
    </div>
</section>

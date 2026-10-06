<section id="alur" class="mx-auto max-w-6xl px-4 pb-20 text-center">
    <x-ui.eyebrow>Solusi &amp; Standar</x-ui.eyebrow>
    <h2 class="mt-1 text-2xl font-bold">Alur Pelaporan Cepat &amp; Transparan</h2>
    <p class="mt-2 text-xs text-muted-foreground">Tiga langkah sederhana dari laporan hingga perbaikan.</p>
    <div class="mt-8 grid gap-4 text-left md:grid-cols-3">
        @foreach ([
            ['camera', 'Foto &amp; Geotag', 'Ambil foto kerusakan, lokasi terdeteksi otomatis.'],
            ['zap', 'Disposisi Cepat', 'Laporan diteruskan ke petugas yang berwenang.'],
            ['list-checks', 'Pantau &amp; Tuntas', 'Lihat progres perbaikan hingga selesai.'],
        ] as [$icon, $title, $desc])
            <x-ui.card class="p-6">
                <x-dynamic-component :component="'lucide-'.$icon" class="h-5 w-5 text-primary" />
                <h3 class="mt-4 font-semibold">{!! $title !!}</h3>
                <p class="mt-1 text-xs text-muted-foreground">{{ $desc }}</p>
            </x-ui.card>
        @endforeach
    </div>
</section>

<section id="cakupan" class="mx-auto max-w-6xl px-4 py-20">
    <x-ui.eyebrow>Intrinsic Facilities</x-ui.eyebrow>
    <div class="mt-1 flex flex-col justify-between gap-2 md:flex-row md:items-end">
        <h2 class="text-2xl font-bold">Cakupan Pemantauan Terpadu</h2>
        <p class="max-w-xs text-xs text-muted-foreground">MoniFas menutup berbagai macam fasilitas yang menopang kehidupan warga setiap hari.</p>
    </div>
    <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ([
            ['route', 'Jalan &amp; Trotoar', 'Lubang, retakan, dan trotoar rusak.'],
            ['lightbulb', 'Penerangan Jalan (PJU)', 'Lampu jalan padam atau redup.'],
            ['droplets', 'Drainase &amp; Banjir', 'Saluran tersumbat dan genangan.'],
            ['trees', 'Taman &amp; Fasilitas Hijau', 'Taman, bangku, dan area publik.'],
            ['construction', 'Jembatan Penyeberangan', 'Kerusakan struktur dan pagar.'],
            ['traffic-cone', 'Rambu &amp; Lampu Lalu Lintas', 'Rambu hilang dan lampu mati.'],
        ] as [$icon, $title, $desc])
            <x-ui.card class="p-5 transition hover:shadow-md">
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-secondary text-primary">
                    <x-dynamic-component :component="'lucide-'.$icon" class="h-4 w-4" />
                </span>
                <h3 class="mt-3 text-sm font-semibold">{!! $title !!}</h3>
                <p class="mt-1 text-xs text-muted-foreground">{{ $desc }}</p>
            </x-ui.card>
        @endforeach
    </div>
</section>

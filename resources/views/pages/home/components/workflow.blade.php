<section id="alur" class="border-t border-border bg-secondary">
    <div class="mx-auto max-w-6xl px-4 py-16">
        <h2 class="text-2xl font-semibold">Cara kerja</h2>
        <ol class="mt-8 grid gap-8 md:grid-cols-3">
            @foreach ([
                ['Kirim laporan', 'Isi lokasi dan deskripsi kerusakan, lalu lampirkan foto sebagai bukti.'],
                ['Ditugaskan ke petugas', 'Laporan ditinjau, diberi prioritas, dan diteruskan ke petugas terkait.'],
                ['Pantau perbaikan', 'Status laporan diperbarui sampai perbaikan selesai.'],
            ] as $i => [$title, $desc])
                <li>
                    <span class="text-sm font-medium text-primary">{{ $i + 1 }}</span>
                    <h3 class="mt-1 font-medium">{{ $title }}</h3>
                    <p class="mt-1 text-sm text-muted-foreground">{{ $desc }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>

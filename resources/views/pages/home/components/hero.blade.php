<section id="peta" class="mx-auto max-w-6xl px-4 pt-14 text-center">
    <x-ui.badge>Sensor Aktif Terpadu</x-ui.badge>
    <h1 class="mx-auto mt-5 max-w-2xl text-3xl font-extrabold tracking-tight md:text-5xl">
        Infrastruktur Terawat, Kota Lebih Bermartabat.
    </h1>
    <p class="mx-auto mt-4 max-w-xl text-sm text-muted-foreground">
        Laporkan kerusakan fasilitas publik dan pantau tindak lanjutnya secara transparan dan real time.
    </p>

    <div class="mx-auto mt-8 flex max-w-xl flex-col gap-2 rounded-xl border border-border bg-background p-2 shadow-sm sm:flex-row">
        <div class="flex flex-1 items-center gap-2 rounded-md bg-secondary px-3 py-2 text-sm text-muted-foreground">
            <x-lucide-search class="h-4 w-4" /> Cari lokasi (mis. Jakarta Selatan)
        </div>
        <x-ui.button variant="outline">Cari Progres</x-ui.button>
        <x-ui.button href="#">Buat Laporan Baru</x-ui.button>
    </div>

    <x-home::ui.map-card />
</section>

<x-layouts.dashboard title="Dashboard Analitik — Monitoring Fasilitas">
    <div class="space-y-8">
        <!-- Header Section -->
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-foreground sm:text-3xl">
                    Dashboard Analitik Fasilitas
                </h1>
                <p class="text-sm text-muted-foreground mt-1">
                    Monitoring operasional aset fisik, metrik waktu tanggap SLA, dan tren pelaporan kerusakan.
                </p>
            </div>

            <div class="flex items-center gap-3">
                <a
                    href="#"
                    class="inline-flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-xs font-semibold text-primary-foreground shadow-sm hover:bg-primary/90 transition-colors"
                >
                    <x-lucide-plus class="h-4 w-4" />
                    <span>Buat Laporan Baru</span>
                </a>
            </div>
        </div>

        <!-- Metric / Stat Cards -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Card 1 -->
            <div class="rounded-xl border border-border bg-background p-5 shadow-xs transition-shadow hover:shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-medium text-muted-foreground">Total Aset Fasilitas</span>
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary/10 text-primary">
                        <x-lucide-box class="h-4 w-4" />
                    </span>
                </div>
                <div class="mt-3">
                    <div class="text-2xl font-bold text-foreground">1,248</div>
                    <div class="mt-1 flex items-center text-xs text-muted-foreground">
                        <span class="font-medium text-emerald-600 dark:text-emerald-400">94.2%</span>
                        <span class="ml-1.5">dalam kondisi prima</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="rounded-xl border border-border bg-background p-5 shadow-xs transition-shadow hover:shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-medium text-muted-foreground">Laporan Menunggu Respon</span>
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-amber-500/10 text-amber-600 dark:text-amber-400">
                        <x-lucide-clock class="h-4 w-4" />
                    </span>
                </div>
                <div class="mt-3">
                    <div class="text-2xl font-bold text-foreground">14</div>
                    <div class="mt-1 flex items-center text-xs text-muted-foreground">
                        <span class="font-medium text-amber-600 dark:text-amber-400">3 laporan</span>
                        <span class="ml-1.5">prioritas darurat</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="rounded-xl border border-border bg-background p-5 shadow-xs transition-shadow hover:shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-medium text-muted-foreground">Sedang Diperbaiki</span>
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-500/10 text-blue-600 dark:text-blue-400">
                        <x-lucide-wrench class="h-4 w-4" />
                    </span>
                </div>
                <div class="mt-3">
                    <div class="text-2xl font-bold text-foreground">8</div>
                    <div class="mt-1 flex items-center text-xs text-muted-foreground">
                        <span class="font-medium text-blue-600 dark:text-blue-400">5 teknisi</span>
                        <span class="ml-1.5">aktif bertugas</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="rounded-xl border border-border bg-background p-5 shadow-xs transition-shadow hover:shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-medium text-muted-foreground">Kepatuhan SLA Bulan Ini</span>
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-500/10 text-emerald-600 dark:text-emerald-400">
                        <x-lucide-check-circle-2 class="h-4 w-4" />
                    </span>
                </div>
                <div class="mt-3">
                    <div class="text-2xl font-bold text-foreground">96.8%</div>
                    <div class="mt-1 flex items-center text-xs text-muted-foreground">
                        <span class="font-medium text-emerald-600 dark:text-emerald-400">+2.4%</span>
                        <span class="ml-1.5">di atas target batas SLA</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Grid: Aktivitas Laporan Terbaru & Panduan Analitik -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
            <!-- Left 2 Cols: Status Laporan Terkini -->
            <div class="lg:col-span-2 rounded-xl border border-border bg-background p-6 shadow-xs">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h2 class="text-base font-semibold text-foreground">Tiket Kerusakan Terkini</h2>
                        <p class="text-xs text-muted-foreground">Pantau tiket pelaporan fasilitas dan waktu penyelesaian</p>
                    </div>
                    <a href="#" class="text-xs font-medium text-primary hover:underline">
                        Lihat Semua
                    </a>
                </div>

                <div class="divide-y divide-border">
                    <div class="py-3.5 flex items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-1 flex h-2 w-2 rounded-full bg-red-500"></span>
                            <div>
                                <div class="text-xs font-semibold text-foreground">AC Ruang Lab 301 Rusak / Tidak Dingin</div>
                                <div class="text-[11px] text-muted-foreground">Gedung Riset dan Teknologi Lt. 3 • Pelapor: Sarah W.</div>
                            </div>
                        </div>
                        <span class="rounded-full bg-red-500/10 px-2.5 py-0.5 text-[11px] font-medium text-red-600 dark:text-red-400">
                            Darurat
                        </span>
                    </div>

                    <div class="py-3.5 flex items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-1 flex h-2 w-2 rounded-full bg-amber-500"></span>
                            <div>
                                <div class="text-xs font-semibold text-foreground">Lampu Koridor Lantai 2 Berkedip</div>
                                <div class="text-[11px] text-muted-foreground">Gedung Utama A Lt. 2 • Pelapor: Rian P.</div>
                            </div>
                        </div>
                        <span class="rounded-full bg-amber-500/10 px-2.5 py-0.5 text-[11px] font-medium text-amber-600 dark:text-amber-400">
                            Sedang
                        </span>
                    </div>

                    <div class="py-3.5 flex items-center justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <span class="mt-1 flex h-2 w-2 rounded-full bg-blue-500"></span>
                            <div>
                                <div class="text-xs font-semibold text-foreground">Pintu Toilet Kunci Rusak</div>
                                <div class="text-[11px] text-muted-foreground">Gedung Kuliah Bersama B • Pelapor: Budi S.</div>
                            </div>
                        </div>
                        <span class="rounded-full bg-blue-500/10 px-2.5 py-0.5 text-[11px] font-medium text-blue-600 dark:text-blue-400">
                            Dalam Proses
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right 1 Col: Monitoring Ringkasan Modul -->
            <div class="rounded-xl border border-border bg-background p-6 shadow-xs space-y-4">
                <h2 class="text-base font-semibold text-foreground">Modul Monitoring & Analitik</h2>
                <p class="text-xs text-muted-foreground leading-relaxed">
                    Halaman ini merupakan tampilan utama untuk submodul <code class="rounded bg-muted px-1.5 py-0.5 text-[11px]">monitoring-and-analytic/dashboard</code>.
                </p>

                <div class="space-y-2 pt-2 text-xs">
                    <div class="flex items-center gap-2 text-muted-foreground">
                        <x-lucide-check class="h-4 w-4 text-emerald-600" />
                        <span>Metrik performa & aset fasilitas terintegrasi</span>
                    </div>
                    <div class="flex items-center gap-2 text-muted-foreground">
                        <x-lucide-check class="h-4 w-4 text-emerald-600" />
                        <span>Sinkronisasi laporan perawatan berkala</span>
                    </div>
                    <div class="flex items-center gap-2 text-muted-foreground">
                        <x-lucide-check class="h-4 w-4 text-emerald-600" />
                        <span>Pemantauan Service Level Agreement (SLA)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>

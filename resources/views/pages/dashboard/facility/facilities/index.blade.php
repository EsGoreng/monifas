<x-layouts.dashboard title="Inventaris Fasilitas">
    <div class="space-y-6">
        <!-- Header Halaman Submodul -->
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-foreground">
                    Inventaris Fasilitas
                </h1>
                <p class="text-xs text-muted-foreground mt-0.5">
                    Modul Facility &bull; Kelola aset dan peralatan di setiap ruangan gedung.
                </p>
            </div>

            <div class="flex items-center gap-2">
                <button
                    type="button"
                    class="inline-flex items-center gap-1.5 rounded-lg border border-border bg-background px-3 py-1.5 text-xs font-medium text-foreground hover:bg-secondary transition-colors"
                >
                    <x-lucide-filter class="h-3.5 w-3.5 text-muted-foreground" />
                    <span>Filter</span>
                </button>
                <button
                    type="button"
                    class="inline-flex items-center gap-1.5 rounded-lg bg-primary px-3 py-1.5 text-xs font-semibold text-primary-foreground hover:bg-primary/90 transition-colors shadow-xs"
                >
                    <x-lucide-plus class="h-3.5 w-3.5" />
                    <span>Tambah Fasilitas</span>
                </button>
            </div>
        </div>

        <!-- Tabel Data / Konten Submodul -->
        <div class="rounded-xl border border-border bg-background shadow-xs overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="border-b border-border bg-muted/40 font-semibold text-muted-foreground">
                        <tr>
                            <th class="px-4 py-3">Kode Aset</th>
                            <th class="px-4 py-3">Nama Fasilitas</th>
                            <th class="px-4 py-3">Gedung / Ruangan</th>
                            <th class="px-4 py-3">Kategori</th>
                            <th class="px-4 py-3">Kondisi</th>
                            <th class="px-4 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border text-foreground">
                        <tr class="hover:bg-muted/20 transition-colors">
                            <td class="px-4 py-3 font-mono text-[11px] font-medium text-muted-foreground">AST-2026-001</td>
                            <td class="px-4 py-3 font-medium">Air Conditioner Daikin 2 PK</td>
                            <td class="px-4 py-3 text-muted-foreground">Gedung Utama &bull; Lab Komputer 1</td>
                            <td class="px-4 py-3"><span class="rounded bg-muted px-2 py-0.5 text-[11px]">Elektronik</span></td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/10 px-2 py-0.5 text-[11px] font-medium text-emerald-600 dark:text-emerald-400">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                    Baik
                                </span>
                            </td>
                            <td class="px-4 py-3 text-right">
                                <button type="button" class="text-primary hover:underline font-medium">Detail</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-muted/20 transition-colors">
                            <td class="px-4 py-3 font-mono text-[11px] font-medium text-muted-foreground">AST-2026-002</td>
                            <td class="px-4 py-3 font-medium">Proyektor Epson EB-X500</td>
                            <td class="px-4 py-3 text-muted-foreground">Gedung Kuliah &bull; Ruang 204</td>
                            <td class="px-4 py-3"><span class="rounded bg-muted px-2 py-0.5 text-[11px]">Multimedia</span></td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-500/10 px-2 py-0.5 text-[11px] font-medium text-amber-600 dark:text-amber-400">
                                    <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                                    Perlu Perawatan
                                </span>
                            </td>
                            <td class="px-4 py-3 text-right">
                                <button type="button" class="text-primary hover:underline font-medium">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.dashboard>

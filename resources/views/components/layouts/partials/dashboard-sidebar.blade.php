@php
$navGroups = [
    [
        'label' => 'Ringkasan',
        'items' => [
            [
                'title' => 'Overview',
                'url' => route('dashboard'),
                'icon' => 'lucide-layout-dashboard',
                'active' => request()->routeIs('dashboard') && !request()->is('dashboard/*'),
            ],
        ],
    ],
    [
        'label' => 'Inventaris & Aset',
        'items' => [
            [
                'title' => 'Fasilitas & Aset',
                'url' => url('/dashboard/facility/facilities'),
                'icon' => 'lucide-box',
                'active' => request()->is('dashboard/facility/facilities*'),
            ],
            [
                'title' => 'Gedung & Ruangan',
                'url' => url('/dashboard/facility/buildings'),
                'icon' => 'lucide-building-2',
                'active' => request()->is('dashboard/facility/buildings*') || request()->is('dashboard/facility/rooms*'),
            ],
            [
                'title' => 'Lokasi & Kategori',
                'url' => url('/dashboard/location-and-category/locations'),
                'icon' => 'lucide-map-pin',
                'active' => request()->is('dashboard/location*'),
            ],
        ],
    ],
    [
        'label' => 'Pelaporan',
        'items' => [
            [
                'title' => 'Laporan Kerusakan',
                'url' => url('/dashboard/reporting/reports'),
                'icon' => 'lucide-file-text',
                'active' => request()->is('dashboard/reporting*'),
            ],
        ],
    ],
    [
        'label' => 'Pemeliharaan',
        'items' => [
            [
                'title' => 'Penugasan Petugas',
                'url' => url('/dashboard/maintenance/assignments'),
                'icon' => 'lucide-clipboard-check',
                'active' => request()->is('dashboard/maintenance*'),
            ],
            [
                'title' => 'Perbaikan & Biaya',
                'url' => url('/dashboard/repair/repairs'),
                'icon' => 'lucide-wrench',
                'active' => request()->is('dashboard/repair*'),
            ],
        ],
    ],
    [
        'label' => 'Monitoring & Analitik',
        'items' => [
            [
                'title' => 'Dashboard Analitik',
                'url' => url('/dashboard/monitoring-and-analytic/dashboard'),
                'icon' => 'lucide-chart-column',
                'active' => request()->is('dashboard/monitoring-and-analytic/dashboard*'),
            ],
            [
                'title' => 'Laporan Perawatan',
                'url' => url('/dashboard/monitoring-and-analytic/maintenance-report'),
                'icon' => 'lucide-file-spreadsheet',
                'active' => request()->is('dashboard/monitoring-and-analytic/maintenance-report*'),
            ],
            [
                'title' => 'Monitoring SLA',
                'url' => url('/dashboard/monitoring-and-analytic/sla-monitoring'),
                'icon' => 'lucide-activity',
                'active' => request()->is('dashboard/monitoring-and-analytic/sla-monitoring*'),
            ],
        ],
    ],
    [
        'label' => 'Sistem & Akses',
        'items' => [
            [
                'title' => 'Pengguna & Akses',
                'url' => url('/dashboard/users-and-access/users'),
                'icon' => 'lucide-users',
                'active' => request()->is('dashboard/users*'),
            ],
            [
                'title' => 'Pengumuman',
                'url' => url('/dashboard/supporting/announcements'),
                'icon' => 'lucide-megaphone',
                'active' => request()->is('dashboard/supporting*'),
            ],
        ],
    ],
];
@endphp

<aside
    class="fixed inset-y-0 left-0 z-50 flex w-64 flex-col border-r border-border bg-background transition-transform duration-200 ease-in-out md:static md:translate-x-0"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
>
    <!-- Brand Header -->
    <div class="flex h-14 items-center justify-between border-b border-border px-4">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-2.5 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring rounded-md">
            <span class="flex h-7 w-7 items-center justify-center rounded-md bg-primary text-primary-foreground text-xs font-semibold shadow-xs">
                M
            </span>
            <div class="flex flex-col">
                <span class="text-sm font-semibold tracking-tight text-foreground leading-none">MONIFAS</span>
                <span class="text-[11px] text-muted-foreground mt-0.5">Monitoring Fasilitas</span>
            </div>
        </a>

        <!-- Mobile close button -->
        <button
            type="button"
            class="rounded-md p-1.5 text-muted-foreground hover:bg-secondary hover:text-foreground md:hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring"
            @click="sidebarOpen = false"
            aria-label="Tutup sidebar"
        >
            <x-lucide-x class="h-4 w-4" />
        </button>
    </div>

    <!-- Navigation List -->
    <nav class="flex-1 overflow-y-auto px-3 py-3 space-y-5" aria-label="Navigasi Utama">
        @foreach ($navGroups as $group)
            <div class="space-y-1">
                <div class="px-2.5 py-1 text-xs font-medium text-muted-foreground/70 uppercase tracking-wider">
                    {{ $group['label'] }}
                </div>

                <div class="space-y-0.5">
                    @foreach ($group['items'] as $item)
                        <a
                            href="{{ $item['url'] }}"
                            class="group flex items-center gap-2.5 rounded-md px-2.5 py-1.5 text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring {{ $item['active'] ? 'bg-secondary text-foreground font-semibold shadow-2xs' : 'text-muted-foreground hover:bg-secondary/70 hover:text-foreground' }}"
                        >
                            <x-dynamic-component
                                :component="$item['icon']"
                                class="h-4 w-4 shrink-0 transition-colors {{ $item['active'] ? 'text-foreground' : 'text-muted-foreground group-hover:text-foreground' }}"
                            />
                            <span>{{ $item['title'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </nav>

    <!-- Sidebar Footer -->
    <div class="border-t border-border p-3">
        <a
            href="/"
            class="flex items-center gap-2 rounded-md px-2.5 py-1.5 text-xs font-medium text-muted-foreground transition-colors hover:bg-secondary hover:text-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring"
        >
            <x-lucide-arrow-left class="h-3.5 w-3.5" />
            <span>Kembali ke Beranda</span>
        </a>
    </div>
</aside>

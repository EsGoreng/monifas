<header class="sticky top-0 z-30 flex h-14 items-center justify-between border-b border-border bg-background/95 px-4 backdrop-blur md:px-6">
    <div class="flex items-center gap-3">
        <!-- Mobile hamburger -->
        <button
            type="button"
            class="rounded-lg p-2 text-muted-foreground hover:bg-secondary hover:text-foreground md:hidden"
            @click="sidebarOpen = true"
            aria-label="Buka menu navigasi"
        >
            <x-lucide-menu class="h-5 w-5" />
        </button>

        <!-- Current Section / Title Indicator -->
        <div class="hidden sm:flex items-center gap-2 text-sm text-muted-foreground">
            <span class="font-medium text-foreground">Dashboard</span>
            <span>/</span>
            <span class="text-xs font-normal">MONIFAS Platform</span>
        </div>
    </div>

    <!-- Right Header Actions -->
    <div class="flex items-center gap-3">
        <!-- Search bar -->
        <div class="relative hidden lg:block w-64">
            <x-lucide-search class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-muted-foreground" />
            <input
                type="text"
                placeholder="Cari fasilitas, laporan..."
                class="w-full rounded-lg border border-border bg-muted/40 py-1.5 pl-9 pr-3 text-xs placeholder:text-muted-foreground focus:border-primary focus:bg-background focus:outline-none focus:ring-1 focus:ring-ring"
            />
        </div>

        <!-- Notification Icon -->
        <button
            type="button"
            class="relative rounded-lg p-2 text-muted-foreground hover:bg-secondary hover:text-foreground transition-colors"
            aria-label="Notifikasi"
        >
            <x-lucide-bell class="h-4 w-4" />
            <span class="absolute top-1.5 right-1.5 h-2 w-2 rounded-full bg-primary"></span>
        </button>

        <!-- User Profile Dropdown -->
        <div class="flex items-center gap-2.5 pl-2 border-l border-border">
            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary font-semibold text-xs border border-primary/20">
                AD
            </div>
            <div class="hidden md:flex flex-col text-left">
                <span class="text-xs font-semibold text-foreground leading-tight">Admin Fasilitas</span>
                <span class="text-[10px] text-muted-foreground">admin@monifas.id</span>
            </div>
        </div>
    </div>
</header>

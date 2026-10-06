<section id="cakupan" class="border-t border-border">
    <div class="mx-auto max-w-6xl px-4 py-16">
        <h2 class="text-2xl font-semibold">Fasilitas yang bisa dilaporkan</h2>
        <dl class="mt-8 grid gap-x-10 gap-y-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['Jalan dan trotoar', 'Lubang, retakan, dan trotoar rusak.'],
                ['Penerangan jalan', 'Lampu jalan padam atau redup.'],
                ['Drainase', 'Saluran tersumbat dan genangan.'],
                ['Taman dan area publik', 'Taman, bangku, dan fasilitas di area publik.'],
                ['Jembatan penyeberangan', 'Kerusakan struktur dan pagar.'],
                ['Rambu dan lampu lalu lintas', 'Rambu hilang dan lampu mati.'],
            ] as [$title, $desc])
                <div>
                    <dt class="font-medium">{{ $title }}</dt>
                    <dd class="mt-1 text-sm text-muted-foreground">{{ $desc }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>

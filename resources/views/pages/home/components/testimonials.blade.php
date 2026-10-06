<section id="dampak" class="mx-auto max-w-6xl px-4 pb-20">
    <x-ui.eyebrow>Suara Warga</x-ui.eyebrow>
    <h2 class="mt-1 text-2xl font-bold">Dampak Nyata di Sekitar Kita</h2>
    <div class="mt-6 grid gap-4 md:grid-cols-2">
        @foreach ([
            ['Alan Pradana', 'Warga Jakarta Selatan', 'Laporan lampu jalan rusak ditangani dalam 24 jam. Sangat membantu keamanan lingkungan kami.'],
            ['Siti Nurhaida', 'Warga Bandung', 'Dengan MoniFas, saya bisa memantau progres perbaikan jalan tanpa harus datang ke kantor.'],
        ] as [$name, $role, $quote])
            <x-home::ui.testimonial-card :name="$name" :role="$role" :quote="$quote" />
        @endforeach
    </div>
</section>

<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class ScaffoldCommand extends Command
{
    protected $signature = 'monifas:scaffold';

    protected $description = 'Scaffold the MONIFAS module directory structure (idempotent).';

    public function handle(Filesystem $files): int
    {
        /** @var list<string> $createdInThisRun */
        $createdInThisRun = [];

        foreach (ScaffoldManifest::directories() as $path) {
            $absPath = base_path($path);

            // Idempoten: lewati jika direktori sudah ada
            if ($files->isDirectory($absPath)) {
                continue;
            }

            try {
                $files->makeDirectory($absPath, 0755, true);

                $gitkeep = $absPath.'/.gitkeep';
                if (! $files->exists($gitkeep)) {
                    $files->put($gitkeep, '');
                }

                $createdInThisRun[] = $absPath;
            } catch (\Throwable $e) {
                // Rollback: hapus semua yang sudah dibuat sesi ini (urutan terbalik)
                foreach (array_reverse($createdInThisRun) as $madePath) {
                    $files->deleteDirectory($madePath);
                }

                $this->error("Gagal membuat: {$absPath} — {$e->getMessage()}");

                return Command::FAILURE;
            }
        }

        // Buat file dan view dasar hanya jika belum ada
        $this->createBaseFilesIfNotExist($files);

        $this->info('Scaffold selesai.');

        return Command::SUCCESS;
    }

    /**
     * Membuat file dasar yang belum ada (idempoten).
     */
    private function createBaseFilesIfNotExist(Filesystem $files): void
    {
        $baseFiles = [
            'routes/modules/.gitkeep',
            'resources/views/auth/.gitkeep',
        ];

        foreach ($baseFiles as $relativePath) {
            $absPath = base_path($relativePath);

            // Pastikan direktori induk ada
            $dir = dirname($absPath);
            if (! $files->isDirectory($dir)) {
                $files->makeDirectory($dir, 0755, true);
            }

            // Buat file hanya jika belum ada
            if (! $files->exists($absPath)) {
                $files->put($absPath, '');
            }
        }
    }
}

<?php

use App\Console\Commands\ScaffoldManifest;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

// Feature: monifas-base-project, Property 3: Scaffold completeness — semua path manifest terbuat
// Validates: Requirements 5.1, 5.2, 5.3, 6.1–6.5, 6.8, 7.1–7.10

uses(TestCase::class);

it('semua path manifest terbuat sebagai direktori dengan .gitkeep setelah scaffold', function () {
    $tempBase = sys_get_temp_dir().DIRECTORY_SEPARATOR.'monifas_test_'.uniqid();
    $originalBasePath = $this->app->basePath();

    try {
        // Buat base temp dir
        (new Filesystem)->makeDirectory($tempBase, 0755, true);

        // Ganti base_path() ke temp dir agar ScaffoldCommand menulis ke sana
        $this->app->setBasePath($tempBase);

        // Jalankan command scaffold
        $exitCode = Artisan::call('monifas:scaffold');

        expect($exitCode)->toBe(0);

        // Verifikasi setiap path manifest ada sebagai direktori dengan .gitkeep
        foreach (ScaffoldManifest::directories() as $relativePath) {
            $absDir = $tempBase.DIRECTORY_SEPARATOR.str_replace('/', DIRECTORY_SEPARATOR, $relativePath);
            $gitkeep = $absDir.DIRECTORY_SEPARATOR.'.gitkeep';

            expect(is_dir($absDir))
                ->toBeTrue("Direktori tidak ditemukan: {$relativePath}");

            expect(file_exists($gitkeep))
                ->toBeTrue("File .gitkeep tidak ditemukan di: {$relativePath}");
        }
    } finally {
        // Kembalikan base path ke nilai semula
        $this->app->setBasePath($originalBasePath);

        // Hapus temp dir
        (new Filesystem)->deleteDirectory($tempBase);
    }
});

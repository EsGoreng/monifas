<?php

declare(strict_types=1);

namespace App\Console\Commands;

final class ScaffoldManifest
{
    /**
     * Mengembalikan daftar lengkap path direktori yang harus dibuat.
     * Path relatif terhadap base_path().
     *
     * @return array<int, string>
     */
    public static function directories(): array
    {
        $modules = [
            'users-and-access' => ['UsersAndAccess',      ['users', 'roles', 'user-addresses']],
            'facility' => ['Facility',             ['buildings', 'rooms', 'facilities']],
            'location-and-category' => ['LocationAndCategory',  ['locations', 'facility-categories', 'damage-categories']],
            'reporting' => ['Reporting',            ['reports', 'report-evidence', 'report-priorities']],
            'maintenance' => ['Maintenance',          ['officers', 'assignments', 'schedules']],
            'repair' => ['Repair',               ['repairs', 'materials', 'costs']],
            'supporting' => ['Supporting',           ['announcements', 'feedback', 'campaigns']],
        ];

        $paths = [
            // Shared directories
            'resources/views/components/ui',
            'resources/views/components/layout',
            'resources/views/components/shared',
            'resources/views/auth',
            'resources/views/dashboard',
            'app/Services',
            'app/Http/Requests',
            'app/DTOs',
            'app/Enums',
            'app/Constants',
            'app/Support',
            'resources/js/components',
            'routes/modules',
        ];

        foreach ($modules as $kebab => [$namespace, $submodules]) {
            foreach ($submodules as $sub) {
                // Views
                $paths[] = "resources/views/dashboard/{$kebab}/{$sub}/partials";
                // Controllers
                $paths[] = "app/Http/Controllers/{$namespace}/{$sub}";
                // Requests
                $paths[] = "app/Http/Requests/{$namespace}/{$sub}";
                // Services
                $paths[] = "app/Services/{$namespace}/{$sub}";
                // Tests
                $paths[] = "tests/Feature/{$namespace}/{$sub}";
                $paths[] = "tests/Unit/{$namespace}/{$sub}";
            }
        }

        return $paths;
    }
}

<?php

declare(strict_types=1);

// Feature: monifas-base-project, Property 6: Required PHP dependencies present in composer.json
// Validates: Requirements 1.7, 3.3, 3.4, 3.5
it('setiap package PHP wajib terdaftar di require atau require-dev pada composer.json', function (string $package) {
    $composerPath = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'composer.json';
    $composer = json_decode(file_get_contents($composerPath), true);

    $require = array_keys($composer['require'] ?? []);
    $requireDev = array_keys($composer['require-dev'] ?? []);
    $all = array_merge($require, $requireDev);

    expect($all)->toContain($package);
})->with([
    'mallardduck/blade-lucide-icons',
    'larastan/larastan',
    'pestphp/pest',
    'pestphp/pest-plugin-laravel',
    'laravel/pint',
]);

// Feature: monifas-base-project, Property 8: Forbidden packages absent from composer.json
// Validates: Requirements 1.8, 10.2, 10.4, 10.5
it('setiap package terlarang tidak terdaftar di require atau require-dev pada composer.json', function (string $package) {
    $composerPath = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'composer.json';
    $composer = json_decode(file_get_contents($composerPath), true);

    $require = array_keys($composer['require'] ?? []);
    $requireDev = array_keys($composer['require-dev'] ?? []);
    $all = array_merge($require, $requireDev);

    expect($all)->not->toContain($package);
})->with([
    'laravel/breeze',
    'laravel/jetstream',
    'laravel/fortify',
    'livewire/livewire',
    'laravel/socialite',
    'laravel/ui',
    'spatie/laravel-permission',
    'laravel/sanctum',
    'laravel/passport',
    'inertiajs/inertia-laravel',
]);

// Feature: monifas-base-project, Property 9: PSR-4 autoload mappings complete
// Validates: Requirements 2.1, 2.2
it('autoload.psr-4 di composer.json memuat mapping yang diharapkan', function () {
    $composerPath = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'composer.json';
    $composer = json_decode(file_get_contents($composerPath), true);

    $psr4 = $composer['autoload']['psr-4'] ?? [];

    expect($psr4)->toHaveKey('App\\');
    expect($psr4['App\\'])->toBe('app/');

    expect($psr4)->toHaveKey('Database\\Factories\\');
    expect($psr4['Database\\Factories\\'])->toBe('database/factories/');

    expect($psr4)->toHaveKey('Database\\Seeders\\');
    expect($psr4['Database\\Seeders\\'])->toBe('database/seeders/');
});

it('autoload-dev.psr-4 di composer.json memuat mapping Tests\\ => tests/', function () {
    $composerPath = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'composer.json';
    $composer = json_decode(file_get_contents($composerPath), true);

    $psr4Dev = $composer['autoload-dev']['psr-4'] ?? [];

    expect($psr4Dev)->toHaveKey('Tests\\');
    expect($psr4Dev['Tests\\'])->toBe('tests/');
});

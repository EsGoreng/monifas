<?php

// Feature: monifas-base-project, Property 7: Required frontend dependencies present in package.json
// Validates: Requirements 3.1, 3.2
it('setiap package frontend wajib terdaftar di dependencies atau devDependencies pada package.json', function (string $package) {
    $packageJsonPath = dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'package.json';
    $packageJson = json_decode(file_get_contents($packageJsonPath), true);

    $dependencies = array_keys($packageJson['dependencies'] ?? []);
    $devDependencies = array_keys($packageJson['devDependencies'] ?? []);
    $all = array_merge($dependencies, $devDependencies);

    expect($all)->toContain($package);
})->with(['alpinejs', 'chart.js']);

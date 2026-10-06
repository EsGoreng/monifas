<?php

use App\Console\Commands\ScaffoldManifest;

// Feature: monifas-base-project, Property 1: ScaffoldManifest paths are well-formed
it('semua path di ScaffoldManifest adalah well-formed', function () {
    $paths = ScaffoldManifest::directories();

    foreach ($paths as $path) {
        expect($path)
            ->toBeString()
            ->not->toBeEmpty()
            ->not->toStartWith('/')
            ->not->toContain('..')
            ->not->toContain('\\');
    }
});

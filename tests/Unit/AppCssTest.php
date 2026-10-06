<?php

// Feature: monifas-base-project, Property 10: CSS design tokens defined in app.css
// Validates: Requirements 4.2
it('setiap design token CSS variable terdefinisi di app.css', function (string $token) {
    $cssPath = dirname(__DIR__, 2).'/resources/css/app.css';
    $css = file_get_contents($cssPath);

    expect($css)->toContain($token);
})->with([
    '--background',
    '--foreground',
    '--primary',
    '--primary-foreground',
    '--secondary',
    '--secondary-foreground',
]);

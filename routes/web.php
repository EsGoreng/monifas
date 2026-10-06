<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home.index'));
Route::get('/dashboard', fn () => redirect('/dashboard/monitoring-and-analytic/dashboard'))->name('dashboard');

Route::get('/dashboard/{module}/{submodule}', function (string $module, string $submodule) {
    $viewPath = "pages.dashboard.{$module}.{$submodule}.index";

    if (view()->exists($viewPath)) {
        return view($viewPath);
    }

    abort(404);
})->name('dashboard.submodule');

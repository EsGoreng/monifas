<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home.index'));
Route::get('/dashboard', fn () => redirect('/dashboard/monitoring-and-analytic/dashboard'))->name('dashboard');
Route::get('/dashboard/monitoring-and-analytic/dashboard', fn () => view('pages.dashboard.monitoring-and-analytic.dashboard.index'))->name('monitoring-and-analytic.dashboard.index');

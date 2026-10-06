<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home.index'));
Route::get('/dashboard', fn () => view('pages.dashboard.index'))->name('dashboard');

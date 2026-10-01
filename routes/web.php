<?php

use App\Models\Page;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $homePage = Page::where('name', 'home')->firstOrFail();
    return view('page', ['page' => $homePage]);
})->name('home');

Route::get('/page/{name}', function (string $name) {
    $page = Page::where('name', $name)->firstOrFail();
    return view('page', ['page' => $page]);
})->name('page');

Route::get('/login', function () {
    return redirect()->route('filament.admin.auth.login');
})->name('login');

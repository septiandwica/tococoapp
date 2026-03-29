<?php

use Illuminate\Support\Facades\Route;

// 1. Landing Page App
Route::domain(env('APP_DOMAIN'))->group(function () {
    Route::get('/', \App\Livewire\Landing\Home::class)->name('landing.home');
    Route::get('/about', \App\Livewire\Landing\About::class)->name('landing.about');
    Route::get('/products', \App\Livewire\Landing\Products::class)->name('landing.products');
    Route::get('/products/{slug}', \App\Livewire\Landing\ProductDetail::class)->name('landing.products.detail');
});

// 2. News App
Route::domain(env('NEWS_DOMAIN'))->group(function () {
    Route::get('/', \App\Livewire\News\Index::class)->name('news.index');
    Route::get('/article/{slug}', \App\Livewire\News\Show::class)->name('news.show');
});

// 3. Career App
Route::domain(env('CAREER_DOMAIN'))->group(function () {
    Route::get('/', \App\Livewire\Career\JobList::class)->name('career.index');
    Route::get('/job/{slug}', \App\Livewire\Career\JobShow::class)->name('career.show');
});

// 4. Community App (Frontend untuk Member)
Route::domain(env('COMMUNITY_DOMAIN'))->group(function () {
    Route::get('/', function () {
        return redirect()->away('https://whatsapp.com/channel/0029Vb86MxrEgGfH9DkSyX0x');
    })->name('comunity.index');
});


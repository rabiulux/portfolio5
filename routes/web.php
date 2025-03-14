<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'homePage'])->name('home');
Route::get('/about', [SiteController::class, 'aboutPage'])->name('about');
Route::get('/contact', [SiteController::class, 'contactPage'])->name('contact');
Route::get('/services', [SiteController::class, 'servicesPage'])->name('services');
Route::get('/portfolio', [SiteController::class, 'portfolioPage'])->name('portfolio');

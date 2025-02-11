<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function() {
    return view('pages.blog');
})->name('blog');

Route::get('/contact', function() {
    return view('pages.contact');
})->name('contact');

Route::get('/about', function() {
    return view('pages.about');
})->name('about');

Route::get('/dashboard', function() {
    return view('pages.dashboard');
})->name('dashboard');




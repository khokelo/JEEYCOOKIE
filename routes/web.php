<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Program
Route::get('/program', function () {
    return view('program');
})->name('program');

// Our Team
Route::get('/our-team', function () {
    return view('our-team');
})->name('our-team');

// Contact Us
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');



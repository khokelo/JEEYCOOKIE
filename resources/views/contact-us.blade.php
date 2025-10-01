<nav>
  <a href="{{ route('home') }}">Home</a>
  <a href="{{ route('about') }}">About</a>
  <a href="{{ route('program') }}">Program</a>
  <a href="{{ route('our-team') }}">Our Team</a>
  <a href="{{ route('contact-us') }}">Contact Us</a>
</nav>

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
?>


<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us Page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc bibendum risus non 
       enim blandit, nec pretium sapien feugiat.</p>
</body>
</html>

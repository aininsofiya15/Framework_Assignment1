<?php

use Illuminate\Support\Facades\Route;

// Home page: hero, stats and highlight cards
Route::view('/', 'home')->name('home');

// About Me page: background, skills, certifications, hobbies, education
Route::view('/about', 'about')->name('about');

// Contact page: validated form and contact details
Route::view('/contact', 'contact')->name('contact');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/carabao', function () {
    return view('carabao');
})->name('carabao');

Route::get('/farmer', function () {
    return view('farmer');
})->name('farmer');

Route::get('/fprofile', function () {
    return view('fprofile');
})->name('fprofile');

Route::get('/cooperative', function () {
    return view('cooperative');
})->name('cooperative');

Route::get('/privatefarmer', function () {
    return view('privatefarmer');
})->name('privatefarmer');

Route::get('/pregnant', function () {
    return view('pregnant');
})->name('pregnant');

Route::get('/artificial', function () {
    return view('artificial');
})->name('artificial');

Route::get('/fixeai', function () {
    return view('fixeai');
})->name('fixeai');

Route::get('/calfproduction', function () {
    return view('calfproduction');
})->name('calfproduction');

Route::get('/milk', function () {
    return view('milk');
})->name('milk');

Route::get('/dead', function () {
    return view('dead');
})->name('dead');

Route::get('/deadcalf', function () {
    return view('deadcalf');
})->name('deadcalf');

Route::get('/sold', function () {
    return view('sold');
})->name('sold');

Route::get('/fproifle', function () {
    return view('fproifle');
})->name('fproifle');

Route::get('/fstats', function () {
    return view('fstats');
})->name('fstats');

Route::get('/faccount', function () {
    return view('faccount');
})->name('faccount');
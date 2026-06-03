<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CooperativeController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/login-information', function () {
    return view('login-information');
})->name('login.information');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/carabao', function () {
    return view('carabao');
})->name('carabao');

Route::get('/farmer', function () {
    return view('farmer');
})->name('farmer');


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

Route::get('/farmer-animal-inventory', function () {
    return view('farmer-animal-inventory');
})->name('farmer-animal-inventory');

Route::get('/farmer-dashboard', function () {
    return view('farmer-dashboard');
})->name('farmer-dashboard');

Route::get('/farmer-profile', function () {
    return view('farmer-profile');
})->name('farmer.profile');

Route::get('/coop-profile', function () {
    return view('coop-profile');
})->name('coop.profile');

Route::get('/coop-dashboard', function () {
    return view('coop-dashboard');
})->name('coop.dashboard');

Route::get('/coop-animal-inventory', function () {
    return view('coop-animal-inventory');
})->name('coop.animal.inventory');

Route::get('/coop-list-farmer', function () {
    return view('coop-list-farmer');
})->name('coop.list.farmer');

Route::get('/coop-income-statement', function () {
    return view('coop-income-statement');
})->name('coop.income.statement');

Route::get('/coop-balance-sheet', function () {
    return view('coop-balance-sheet');
})->name('coop.balance.sheet');



Route::get('/cooperative', [CooperativeController::class, 'index'])->name('cooperative');
Route::post('/cooperative/store', [CooperativeController::class, 'store'])->name('cooperative.store');
Route::delete('/cooperative/{id}', [CooperativeController::class, 'destroy'])->name('cooperative.delete');
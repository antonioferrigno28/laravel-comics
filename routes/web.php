<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("homepage");

Route::get('/characters', function () {
    return view('characters');
})->name("characterspage");

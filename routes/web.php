<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('beranda');
});

Route::get('/beranda', function () {
    return view('index');
})->name('beranda');

Route::get('/hal2', function () {
    return view('hal2');
})->name('hal2');

Route::get('/area-a', function () {
    return view('area-a');
})->name('area-a');



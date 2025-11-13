<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
    // dd($data);
    return redirect()->route('beranda');
});

Route::get('/beranda', function () {
    return view('index');
})->name('beranda');

Route::get('/hal2', function () {
    return view('hal2');
})->name('hal2');

Route::get('/area-a', function () {
    // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
    $data = json_decode(file_get_contents(public_path('firebase-example.json')), true)['Parkir']['Area_A'];
    // dd($data);
    return view('area-a',compact('data'));
})->name('area-a');

Route::get('/area-b', function () {
    // $data = json_decode(file_get_contents(public_path('firebase-example.json')), true);
    $data = json_decode(file_get_contents(public_path('firebase-example.json')), true)['Parkir']['Area_A'];
    // dd($data);
    return view('area-b',compact('data'));
})->name('area-b');



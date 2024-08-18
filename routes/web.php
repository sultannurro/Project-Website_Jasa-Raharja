<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('HomePage.home');
});

Route::get('/helm', function () {
    return view('LayananEdukasi.helmContent');
});

Route::get('/lampu', function () {
    return view('LayananEdukasi.lampuContent');
});

Route::get('/rambu', function () {
    return view('LayananEdukasi.rambuContent');
});

Route::get('/kelengkapan', function () {
    return view('LayananEdukasi.kelengkapanContent');
});
Route::get('/jrsafetyroad', function () {
    return view('aboutPage.jrsafetyroad');
});

Route::get('/kuisioner', function () {
    return view('kuisioner/kuisioner');
});
Route::get('/welcome', function () {
    return view('welcome');
});



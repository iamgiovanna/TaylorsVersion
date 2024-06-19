<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/quemsomos', function () {
    return view('site.quemsomos');
});


Route::get('/ttpd', function () {
    return view('site.ttpd');
});

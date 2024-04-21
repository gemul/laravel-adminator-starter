<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/forms', function () {
    return view('forms');
});
Route::get('/ui', function () {
    return view('ui');
});

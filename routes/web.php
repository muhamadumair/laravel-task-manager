<?php

use Illuminate\Support\Facades\Route;

//GET
Route::get('/', function () {
    return 'Main Page';
});

Route::get('/xxxx', function () {
    return 'Hello World';
})->name('hello');

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . ' Welcome to our website';
});

//POST
//PUT
//DELETE

Route::fallback(function () {
    return 'Page Not Found';
});
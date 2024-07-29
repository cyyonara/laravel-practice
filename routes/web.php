<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contact');
});

Route::get('info', function () {
    $person = [
        'name' => 'Cyrel',
        'age' => 21,
        'is_gay' => false,
    ];

    return $person;
});

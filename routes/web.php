<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('game', function () {
    return view('game');
});

Route::get('game_profile', function () {
    return view('game_profile');
});

Route::get('dev', function () {
    return view('dev');
});

Route::get('dev_profile', function () {
    return view('dev_profile');
});
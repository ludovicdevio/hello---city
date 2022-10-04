<?php

use Illuminate\Support\Facades\Route;

/*
//Default: retourner une vue
Route::get('/', function () {
    return view('home');
});

//Basic
Route::get('/test', function () {
    return 'test';
});

//Avec des parametres
Route::get('/bonjour/{name}', function ($name) {
    return 'Nom: ' . $name;
});

//Avec des parametres non obligatoires
Route::get('/user-mandatory/{name?}', function ($name = 'julian') {
    return $name;
});

//Avec une validation du type
Route::get('/userbis/{name}', function ($name) {
    return 'ici';
})->where('name', '[A-Za-z]+');
// ->where('id', '[0-9]+');
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});

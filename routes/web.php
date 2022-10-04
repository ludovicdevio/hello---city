<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
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

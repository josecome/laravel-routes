<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Simple Route with callback function */
Route::get('/', function () {
    return view('welcome');
});

/* Dinamic Route*/
Route::get('/page/{slug}', function ($slug) {});

/* Dinamic Route that only accept letters as parameter */
Route::get('/page/{slug}', function ($slug) {})->where('slug', '[A-Za-z]+');

/* Dinamic Route that only accept number as parameter */
Route::get('/page/{id}', function ($id) {})->where('id', '[0-9]+');

/* Option 1: Dinamic Route that only accept number as first parameter and letters as second parameter */
Route::get('/page/{id}/{slug}', function ($id, $name) {})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

/* Option 2: Dinamic Route that only accept number as first parameter and letters as second parameter */
Route::get('/page/{id}/{name}', function ($id, $name) {})->whereNumber('id')->whereAlpha('name');

Route::get('/page/{name}', function ($name) {})->whereAlphaNumeric('name');

Route::get('/page/{id}', function ($id) {})->whereUuid('id');

Route::get(
    '/page/{category}', function ($category) {}
)->whereIn('category', ['movie', 'song', 'painting']);

Route::get('page/{slug}', function ($slug) {})->can('update', $post);

//Grouped route
Route::middleware('auth')->group(function () {
    Route::get('page/{slug}', function ($slug) {});
    Route::get('category/{slug}', function ($slug) {});
});

//Optional Parameters
Route::get('/page/{slug?}', function (string $slug = null) {
    return $slug;
});


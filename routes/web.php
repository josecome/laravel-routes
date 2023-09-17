<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

/* Dinamic Route without name */
Route::get('page/{slug}',  [PageController::class, 'Page']);

/* Dinamic Route*/
Route::get('/page_a/{slug}', [PageController::class, 'Page'])->name('page_a');

/* Dinamic Route that only accept letters as parameter */
Route::get('/page_b/{slug}',  [PageController::class, 'Page'])->where('slug', '[A-Za-z]+');

/* Dinamic Route that only accept number as parameter */
Route::get('/page_c/{id}',  [PageController::class, 'Page'])->where('id', '[0-9]+');

/* Option 1: Dinamic Route that only accept number as first parameter and letters as second parameter */
Route::get('/page_d/{id}/{slug}',  [PageController::class, 'Page'])->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

/* Option 2: Dinamic Route that only accept number as first parameter and letters as second parameter */
Route::get('/page_d/{id}/{slug}',  [PageController::class, 'Page'])->whereNumber('id')->whereAlpha('name');

/* Dinamic Route that accept both alpha and numerics characters */
Route::get('/page_e/{slug}',  [PageController::class, 'Page'])->whereAlphaNumeric('name');

/* Dinamic Route that accept UUID format parameter */
Route::get('/page_f/{id}',  [PageController::class, 'Page'])->whereUuid('id');

/*Route::get(
    '/page/{category}',  [PageController::class, 'Page']
)->whereIn('category', ['movie', 'song', 'painting']);*/

//Grouped route
/*Route::middleware('auth')->group(function () {
    Route::get('page/{slug}', function ($slug) {});
    Route::get('category/{slug}', function ($slug) {});
});*/

//Optional Parameters
Route::get('/page/{slug?}', function (string $slug = null) {
    return $slug;
});


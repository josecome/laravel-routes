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
Route::get('/page_a/{slug}',  [PageController::class, 'Page1']);

/* Dinamic Route*/
Route::get('/page_b/{slug}', [PageController::class, 'Page1'])->name('page_b');

/* Dinamic Route that only accept letters as parameter */
Route::get('/page_c/{slug}',  [PageController::class, 'Page1'])->where('slug', '[A-Za-z]+');

/* Dinamic Route that only accept number as parameter */
Route::get('/page_d/{id}',  [PageController::class, 'Page2'])->where('id', '[0-9]+');

/* Option 1: Dinamic Route that only accept number as first parameter and letters as second parameter */
Route::get('/page_e/{id}/{slug}',  [PageController::class, 'Page2'])->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

/* Option 2: Dinamic Route that only accept number as first parameter and letters as second parameter */
Route::get('/page_d/{id}/{slug}',  [PageController::class, 'Page2'])->whereNumber('id')->whereAlpha('name');

/* Dinamic Route that accept both alpha and numerics characters */
Route::get('/page_f/{slug}',  [PageController::class, 'Page1'])->whereAlphaNumeric('name');

/* Dinamic Route that accept UUID format parameter */
Route::get('/page_g/{id}',  [PageController::class, 'Page3'])->whereUuid('id');

/* Dinamic Route with optional parameter */
Route::get('/page_h/{slug?}',  [PageController::class, 'Page1'])->whereUuid('id');

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


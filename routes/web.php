<?php

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

Auth::routes();

Route::get('/', 'ClosureController@welcome');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

/**
 * admin route
 */
Route::prefix('admin')->group(function () {
    Route::get('home', 'AdminController@index');

    Route::resource('articles', 'ArticleController');
    Route::resource('articletags', 'ArticleTagController');
});



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

/**
 * Reception
 */
Route::prefix('admin')->group(function () {
    Route::get('/', 'ReceptionController@index');
    Route::get('/lists/{list_id}', 'ReceptionController@lists');
    Route::get('/article/{article_id}', 'ReceptionController@article');
});

/**
 * Admin
 */
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('articles', 'ArticleController');
    Route::resource('article-tags', 'ArticleTagController');
});


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
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Reception
 */
Route::prefix('/')->group(function () {
    Route::get('/', 'ReceptionController@index');
    Route::get('/lists/{group_id}', 'ReceptionController@lists');
    Route::get('/article/{article_id}', 'ReceptionController@article');
});

/**
 * Admin
 */
Route::prefix('/')->middleware(['auth'])->group(function () {
    Route::get('admin', 'AdminController@index');
    Route::resource('articles', 'ArticleController');
    Route::resource('article_tags', 'ArticleTagController');
    Route::resource('article_groups', 'ArticleGroupController');
});

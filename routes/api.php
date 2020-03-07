<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', 'ClosureController@user');

Route::apiResource('articles', 'ArticleController');
Route::apiResource('article_tags', 'ArticleTagController');
Route::apiResource('article_groups', 'ArticleGroupController');
Route::apiResource('admins', 'AdminController');

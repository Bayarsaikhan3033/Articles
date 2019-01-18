<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//list articles
route::get('articles','ArticleController@index');

//list single article
route::get('article/{id}','ArticleController@show');

//create new article
route::post('article','ArticleController@store');

//update article
route::put('article','ArticleController@store');

//delete article
route::delete('article/{id}','ArticleController@destroy');
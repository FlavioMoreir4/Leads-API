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

Route::post('token', 'Auth\LoginController@login');
Route::post('token/new', 'Auth\LoginController@token');
//Route::post('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');
    
    Route::post('/add', 'LeadController@add');
    Route::get('/leads', 'LeadController@list');
    Route::get('/leads/{id}', 'LeadController@select');
    Route::put('/leads/{id}', 'LeadController@update');
    Route::delete('/leads/{id}', 'LeadController@delete');
});

Route::get('/', 'LeadController@status');
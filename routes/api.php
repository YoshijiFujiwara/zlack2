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


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('selectWorkspace', 'AuthController@selectWorkspace'); // ログインするワークスペースを選択する
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

/**
 * ワークスペース
 */
Route::apiResource('/workspace', 'WorkspaceController');

/**
 * チャンネル
 */
Route::get('/channel/{workspaceId}', 'ChannelController@index');
Route::post('/channel', 'ChannelController@store');
Route::delete('/channel/{channel}', 'ChannelController@delete');
Route::get('/channel/{channel}', 'ChannelController@show');
Route::post('/channel/{channel}', 'ChannelController@update');

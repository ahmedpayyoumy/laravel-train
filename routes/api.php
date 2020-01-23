<?php

use Illuminate\Http\Request;

Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('create_order', 'OrdersController@store');
    Route::post('update_order', 'OrdersController@update');
    Route::post('delete_order', 'OrdersController@delete');

});

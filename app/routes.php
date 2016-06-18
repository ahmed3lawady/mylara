<?php

// Admin Pages
Route::group(array('prefix' => 'admincp'), function () {
    /********************** Login **************************/
    Route::get('login', array('uses' => 'LoginController@index'));
    Route::post('login', array('uses' => 'LoginController@doLogin'));
    Route::get('logout', array('uses' => 'LoginController@doLogout'));
    /*******************************************************************/

    Route::group(array('before' => 'auth'), function () {
        /********************** Admin Dashboard **************************/
        Route::get('/', 'HomeController@admincp');
        /*******************************************************************/
        /********************** Users **************************/
        Route::get('users', 'UsersController@index');
        Route::match(array('GET', 'POST'), 'newUser', 'UsersController@create');
        Route::post('newUser', 'UsersController@create');
        Route::match(array('GET', 'POST'), 'updateUser/{id}', 'UsersController@update');
        Route::post('updateUser/{id}', 'UsersController@update');
        Route::get('deleteUser/{id}', 'UsersController@delete');
        Route::get('getUser/{id}', 'UsersController@getUser');
        /*******************************************************************/
    });
});
/*********************************************************/
//Frontend Pages
Route::get('/', 'HomeController@index');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){


    Route::get('/', ['as' => 'admin.index', function() {
        return view('admin.index');
    }]);

    Route::group(['middleware' => 'admin'], function(){

       Route::resource('users', 'UsersController');

       Route::get('users/{id}/destroy', [
	    	'uses' => 'UsersController@destroy',
	    	'as'   => 'admin.users.destroy'
       ]);
    });


    Route::resource('categories', 'CategoriesController');

   	Route::get('categories/{id}/destroy', [
    	'uses' => 'CategoriesController@destroy',
    	'as'   => 'admin.categories.destroy'
    ]);

    Route::resource('contactos', 'ContactosController');
    Route::get('contactos/{id}/destroy', [
      'uses' => 'ContactosController@destroy',
      'as'   => 'admin.contactos.destroy'
    ]);

    Route::resource('zonaestudiogratis', 'Zona_Estudio_FreesController');
    Route::get('zonaestudiogratis/{id}/destroy', [
      'uses' => 'Zona_Estudio_FreesController@destroy',
      'as'   => 'admin.zonaestudiogratis.destroy'
    ]);

    Route::resource('zonaestudiopago', 'Zona_Estudio_PrivatesController');
    Route::get('zonaestudiopago/{id}/destroy', [
      'uses' => 'Zona_Estudio_PrivatesController@destroy',
      'as'   => 'admin.zonaestudiopago.destroy'
    ]);
});

// Authentication routes...
Route::get('admin/auth/login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'admin.auth.login'
]);
Route::post('admin/auth/login', [
    'uses' => 'Auth\AuthController@postLogin',
    'as'   => 'admin.auth.login'
]);
Route::get('admin/auth/logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'admin.auth.logout'
]);

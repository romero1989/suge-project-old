<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
//Route::get('/', function () {
//  return view('dashboard');
//});









/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */


Route::group(['middleware' => 'web'], function () {
    Route::Auth();
    Route::get('/', 'HomeController@index');    
    Route::get('/dashboard', 'HomeController@dashboard');
    
    //Rotas para o gerenciamento de perfill (Role)
    Route::get('sistema/perfil', 'RoleController@index');
    Route::get('sistema/perfil/create', 'RoleController@create');
    Route::post('sistema/perfil/store', 'RoleController@store');
    
    
    
    
    Route::get('usuario', 'UsuarioController@index');
    Route::get('usuario/create', 'UsuarioController@create');
    Route::post('usuario/store', 'UsuarioController@store');
    Route::get('usuario/edit/{id}', 'UsuarioController@edit');
    Route::get('usuario/delete/{id}', 'UsuarioController@delete');
    Route::get('usuario/show/{id}', 'UsuarioController@show');
    Route::patch('usuario/update/{id}', 'UsuarioController@update');



    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    // Rotas para solicitar trocar de senha...
    Route::get('password/email', 'PasswordController@getEmail');
    Route::post('password/email', 'PasswordController@postEmail');

// Rotas para trocar a senha...
    Route::get('password/reset/{token}', 'PasswordController@getReset');
    Route::post('password/reset', 'PasswordController@postReset');
});




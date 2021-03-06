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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/acesso_post', 'UserController@index');
Route::get('/acesso_usuario', 'UserController@viewUser');
Route::get('/post/{id}/update', 'UserController@updatePost');
Route::get('/roles-permissions', 'HomeController@rolesPermissions');

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

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/about','StaticPagesController@about')->name('about');

Route::resource('users','UsersController');
//显示所有用户  Route::get('/users', 'UsersController@index')->name('users.index');
//显示个人信息  Route::get('/users/{user}', 'UsersController@show')->name('users.show');
//注册页面  Route::get('/users/create', 'UsersController@create')->name('users.create');
//新增用户  Route::post('/users', 'UsersController@store')->name('users.store');
//编辑页面  Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
//更新  Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
//删除  Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');


Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');
Route::delete('logout','SessionsController@destroy')->name('logout');

Route::get('signup/confirm/{token}','UsersController@confirmEmail')->name('confirm_email');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

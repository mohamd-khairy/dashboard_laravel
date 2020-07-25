<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'Admin\LoginController@login')->name('login');
Route::post('/login', 'Admin\LoginController@do_login')->name('do_login');

Route::group(['prefix' => 'admin',  'as' => 'admin.', 'middleware' => 'auth'], function () {


    Route::get('/', function () {
        return view('admin.index');
    });

    /** pages */
    Route::get('/pages', 'Admin\PagesController@index')->name('get_pages');
    Route::get('/page/add', 'Admin\PagesController@create')->name('get_create_page');
    Route::post('/page/create', 'Admin\PagesController@store')->name('add_page');
    Route::get('/page/edit/{id}', 'Admin\PagesController@edit')->name('edit_page');
    Route::put('/page/update', 'Admin\PagesController@update')->name('update_page');
    Route::delete('/page/delete/{id}', 'Admin\PagesController@delete')->name('delete_page');

    /** users */
    Route::get('/users', 'Admin\UsersController@index')->name('get_users');
    Route::get('/user/add', 'Admin\UsersController@create')->name('get_create_user');
    Route::post('/user/create', 'Admin\UsersController@store')->name('add_user');
    Route::get('/user/edit/{id}', 'Admin\UsersController@edit')->name('edit_user');
    Route::put('/user/update', 'Admin\UsersController@update')->name('update_user');
    Route::delete('/user/delete/{id}', 'Admin\UsersController@delete')->name('delete_user');
});

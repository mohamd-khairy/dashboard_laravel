<?php

use Illuminate\Support\Facades\Route;

/******************** website******************* */
// Route::get('/', 'HomePageController@index')->name('homepage.index');
// Route::get('/about', 'HomePageController@about')->name('homepage.about');

// Route::get('/contact', 'HomePageController@contact')->name('homepage.contact');

// Route::get('/products', 'HomePageController@products')->name('homepage.products');
// Route::get('/product/{id}', 'HomePageController@product_details')->name('homepage.product_details');

// Route::get('/services', 'HomePageController@services')->name('homepage.services');
// Route::get('/service/{id}', 'HomePageController@service_details')->name('homepage.service_details');

// Route::get('/category/{id}', 'HomePageController@category_details')->name('homepage.category_details');

/******************* admin ********************* */
Route::get('/login', 'Admin\LoginController@login')->name('login');
Route::post('/login', 'Admin\LoginController@do_login')->name('do_login');
Route::post('/logout', 'Admin\LoginController@do_logout')->name('logout');
Route::group(['prefix' => '/',  'as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {

    Route::get('/', 'LoginController@home');

    Route::get('/cars-check-create', 'CarsController@check_create')->name('cars.check.create');
    Route::get('/cars-check', 'CarsController@check')->name('cars.check');
    Route::resource('cars', 'CarsController');

    Route::get('/car-history/{id}', 'CarsController@carHistory')->name('cars.car_history');
    Route::post('/car-history/{id}/store', 'CarsController@carHistoryStore')->name('cars.carHistoryStore');
    Route::delete('/car-history-delete/{id}', 'CarsController@delete')->name('cars.carHistoryStore.delete');

    Route::resource('errors', 'ErrorController');
    

    // Route::resource('sponser', 'SponserController');
    // Route::resource('product', 'ProductController');
    // Route::resource('service', 'ServiceController');
    // Route::resource('about', 'AboutController');
    // Route::resource('contact', 'ContactController');
    // Route::resource('setting', 'SettingController');
    // Route::resource('header', 'HeaderController');
    // Route::resource('footer', 'FooterController');
    // Route::resource('social', 'SocialController');

    /** pages */
    Route::get('/pages', 'PagesController@index')->name('get_pages');
    Route::get('/pages/add', 'PagesController@create')->name('get_create_page');
    Route::post('/pages/create', 'PagesController@store')->name('add_page');
    Route::get('/pages/edit/{id}', 'PagesController@edit')->name('edit_page');
    Route::put('/pages/update', 'PagesController@update')->name('update_page');
    Route::delete('/pages/delete/{id}', 'PagesController@delete')->name('delete_page');

    /** users */
    Route::get('/user', 'UsersController@index')->name('get_users');
    Route::get('/user/add', 'UsersController@create')->name('get_create_user');
    Route::post('/user/create', 'UsersController@store')->name('add_user');
    Route::get('/user/edit/{id}', 'UsersController@edit')->name('edit_user');
    Route::put('/user/update', 'UsersController@update')->name('update_user');
    Route::delete('/user/delete/{id}', 'UsersController@delete')->name('delete_user');
});

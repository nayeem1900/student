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

Route::get('/', 'Website\PageController@index')->name('index');


Route::group(['prefix'=>'website'], function(){


    Route::get('pages.admission-info', 'Website\PageController@admissioninfo')->name('website.addmission-info');
    Route::get('pages.aboutus', 'Website\PageController@aboutus')->name('website.aboutus');
    Route::get('pages.comon', 'Website\PageController@messageprincipal')->name('website.comon');
    Route::get('pages.gallery', 'Website\PageController@gallery')->name('website.gallery');
    Route::get('pages.contact', 'Website\PageController@contact')->name('website.contact');
    Route::get('pages.notice', 'Website\PageController@notice')->name('website.notice');


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







Route::group(['prefix'=>'users','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::post('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
});

Route::group(['prefix'=>'profiles','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/store', 'Backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
    Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


});


Route::group(['prefix'=>'logos','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
    Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
    Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
    Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
    Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
    Route::post('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
});

Route::group(['prefix'=>'gallerys','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\GalleryController@view')->name('gallerys.view');
    Route::get('/add', 'Backend\GalleryController@add')->name('gallerys.add');
    Route::post('/store', 'Backend\GalleryController@store')->name('gallerys.store');
    Route::get('/edit/{id}', 'Backend\GalleryController@edit')->name('gallerys.edit');
    Route::post('/update/{id}', 'Backend\GalleryController@update')->name('gallerys.update');
    Route::post('/delete/{id}', 'Backend\GalleryController@delete')->name('gallerys.delete');
});

Route::group(['prefix'=>'sliders','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
    Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
    Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');
    Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
    Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
    Route::post('/delete/{id}', 'Backend\SliderController@delete')->name('sliders.delete');
});

Route::group(['prefix'=>'notices','middleware' => 'auth'], function(){

    Route::get('/view', 'Backend\NoticeController@view')->name('notices.view');
    Route::get('/add', 'Backend\NoticeController@add')->name('notices.add');
    Route::post('/store', 'Backend\NoticeController@store')->name('notices.store');
    Route::get('/edit/{id}', 'Backend\NoticeController@edit')->name('notices.edit');
    Route::post('/update/{id}', 'Backend\NoticeController@update')->name('notices.update');
    Route::post('/delete/{id}', 'Backend\NoticeController@delete')->name('notices.delete');
});
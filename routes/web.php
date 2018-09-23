<?php

/*Site*/
Route::group(['namespace' => 'Site'], function(){
    Route::get('/', 'SiteController@index')->name('site.home');
});

Auth::routes();

/*Admin*/
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/sensores', 'HomeController@sensores')->name('sensores');
});

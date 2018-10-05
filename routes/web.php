<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*
| Index route
| Returns resume page
*/
Route::get('/', 'HomeController@index')->name('home.index');

Route::post('/', 'HomeController@sendMail')->name('home.sendMail');

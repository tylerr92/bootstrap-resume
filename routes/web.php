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

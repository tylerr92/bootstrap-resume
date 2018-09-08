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

/**
 * Resume Resource Routes
 * |--------------------------------------------------------------|
 * | Verb      | URI                   | Action  | Route Name     |
 * | GET       | /resume               | index   | resume.index   |
 * | GET       | /resume/create        | create  | resume.create  |
 * | POST      | /resume               | store   | resume.store   |
 * | GET       | /resume/{resume}      | show    | resume.show    |
 * | GET       | /resume/{resume}/edit | edit    | resume.edit    |
 * | PUT/PATCH | /resume/{resume}      | update  | resume.update  |
 * | DELETE    | /resume/{resume}      | destroy | resume.destroy |
 * |--------------------------------------------------------------|
 */
Route::resource('/resume', 'ResumeController');

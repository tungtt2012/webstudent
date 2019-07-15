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
Route::get('/', 'StudentController@index');

Route::resource('faculties', 'FacultyController');

Route::resource('students', 'StudentController');

Route::resource('classes', 'ClassController');

Route::resource('subjects', 'SubjectController');

Route::resource('marks','MarkController');


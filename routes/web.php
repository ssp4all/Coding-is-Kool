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

Route::get('/student', function () {
    return view('welcome');
});
Route::get('/leaderboard', function () {
    return view('pages.leaderboard');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/teacher', 'RegistrationController@getCurrentActivities');

Route::get('/teacher/level/{id}', 'RegistrationController@index');

Route::get('/teacher/grade/{sea_id}', 'RegistrationController@gradeStudents');
Route::post('/teacher/grade', 'RegistrationController@updateMarks')->name('teacher.addMarks');

Route::get('/level', 'LevelsController@index');
Route::get('/register', 'LevelsController@index');

Route::get('/level/{level}', 'LevelsController@searchByLevel');

Route::post('/teacher/level/add', 'RegistrationController@registerStudents')->name('teacher.register');
Route::get('/register/{activityNumber}', 'LevelsController@register');

Route::get('/login', 'OauthController@login');

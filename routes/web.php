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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/leaderboard', function () {
    return view('pages.leaderboard');
});


Route::get('/teacher', function () {
    return view('welcomeTeacher');
});

Route::get('/teacher/level', function () {
    return view('pages.levelTeacher');
});

Route::get('/level', 'LevelsController@index');

Route::get('/level/{level}', 'LevelsController@searchByLevel');
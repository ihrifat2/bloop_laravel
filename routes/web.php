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

/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imran', function () {
    return 'welcome Imran';
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name. ' with an id of '.$id;
});

*/


Route::get('/', 'pagesController@index');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

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

Auth::routes();

Route::get('/administrator','AdministrationController@index')->name ('administration.dashboard');

Route::get('/home', 'HomeController@index')->name('home');

//frntend
Route::resource('/users','UserController');

Route::get('/post/{slug}','frontend\FPostController@show');

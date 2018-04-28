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

/*administrator / frontend */

Route::get('administrator', function () {
    return view('administrator');
})->name('administrator-dashboard');
Route::get('administrator/users', function () {
    return view('layouts.administrator.user.index');
})->name('user-lists');
Route::get('administrator/categories', function () {
    return view('layouts.administrator.category.index');
});


//backend

Route::get('/home', 'HomeController@index')->name('home');

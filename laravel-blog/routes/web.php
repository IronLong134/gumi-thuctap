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
route::get('/testconnect', 'DemoController@testconnect')->name('testconnect');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'DemoController@admin')->name('admin')->middleware('checkadmin');
Route::get('/wall', function () {
    return view('wall');
});
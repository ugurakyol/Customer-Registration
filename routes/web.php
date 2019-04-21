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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome ');
});
=======
Route::get('/', 'IndexController@index')->name('home');
>>>>>>> 106f58c1398ad0b138b86c1574ae62686b737245

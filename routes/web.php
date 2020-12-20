<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within
*/




Route::get('/',"StaticPagesController@home")->name('home');
Route::get('help',"StaticPagesController@help")->name('help');
Route::get('about',"StaticPagesController@about")->name('about');

Route::get('signup',"UsersController@create")->name('signup');
Route::resource('users','UsersController');

Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');
Route::delete('loginout','SessionsController@destroy')->name('loginout');

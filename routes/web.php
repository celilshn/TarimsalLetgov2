<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/','HomePage@index')->name('homepage');
Route::get('/login','HomePage@login')->name('login');
Route::get('/register','HomePage@register')->name('register');
Route::get('/logout','AuthController@logout')->name('logout');
Route::get('/auth','AuthController@auth')->name('auth');
Route::post('/authregister','AuthController@authregister')->name('authregister');

Route::get('/about','HomePage@about')->name('about');
Route::get('/products','HomePage@products')->name('products');
Route::post('/products/search','HomePage@search')->name('search');

Route::get('/product/{slug}/{id}','HomePage@single')->name('single');


Route::get('/admin','AdminHomePage@index')->name('adminhomepage');
Route::post('/admin/save','AdminHomePage@save')->name('save');


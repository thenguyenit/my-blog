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

Route::get('/', 'IndexController@index')->name('home');
Route::get('/{year}/{slug}', 'IndexController@articleDetail')->name('article-detail');

Route::get('/notes', 'IndexController@notes')->name('notes');
Route::get('/note/{year}/{slug}', 'IndexController@noteDetail')->name('note-detail');

Route::get('/about-me', 'IndexController@about')->name('about-me');

Route::get('/go-shopping', 'ShoppingController@index')->name('shopping');
Route::get('/go-shopping/{category}/{slug}', 'ShoppingController@productDetail')->name('product-detail');
Route::get('/faq', 'ShoppingController@faq')->name('faq');
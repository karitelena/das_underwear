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

Route::get('/', 'SiteController@index');

Route::get('/shop', 'ProdutoController@index');

Route::get('/collection', 'SiteController@collection');

Route::get('/archive', 'SiteController@archive');

Route::get('/contact', 'SiteController@contact');

Route::get('/about', 'SiteController@about');

Route::get('/account', 'SiteController@account');

Route::get('/sac', 'SiteController@sac');

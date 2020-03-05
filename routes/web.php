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

// Route::get('/shop', 'SiteController@shop');

Route::get('/collection', 'SiteController@collection');

Route::get('/archive', 'SiteController@archive');

Route::get('/contact', 'SiteController@contact');

Route::get('/about', 'SiteController@about');

Route::get('/cadastro', 'SiteController@cadastro');

Route::get('/faq', 'SiteController@faq');

Route::get('/teste', 'SiteController@teste');

Route::group(['prefix' => 'painel'], function() {

    Route::get('/', 'ProdutoController@index');

    Route::get('/produtos', 'ProdutoController@produto');
    
});

Route::group(['prefix' => 'shop'], function() {

    Route::get('/', 'SiteController@shop');

    Route::get('/item/{produto}', 'ProdutoController@item');

    
});

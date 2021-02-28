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
    //検索一覧へリダイレクト
    return redirect()->route('customer_index');
});

Route::group(['prefix' => 'customer'], function () {
    //検索一覧表示
    Route::get('/', 'CustomerController@index')->name('customer_index');

    //検索一覧の検索時
    Route::post('/', 'CustomerController@search')->name('customer_search');

    //新規登録の表示
    Route::get('/create', 'CustomerController@create')->name('customer_create');

    //詳細の表示
    Route::get('/detail/{id}', 'CustomerController@detail')->name('customer_detail');

    //編集の表示
    Route::get('/edit/{id}', 'CustomerController@edit')->name('customer_edit');

    //詳細で削除
    Route::get('/delete/{id}', 'CustomerController@delete')->name('customer_delete');

    //新規登録で登録時
    Route::post('/store', 'CustomerController@store')->name('customer_store');

    //編集で更新時
    Route::post('/update', 'CustomerController@update')->name('customer_update');
});

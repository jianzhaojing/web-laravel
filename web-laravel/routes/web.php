<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'demo'], function() {
    Route::get('index', 'DemoController@index')->name('demo.index');
    Route::get('getList', 'DemoController@getList')->name('demo.getList');
    Route::get('getName', 'DemoController@getName')->name('demo.getName');
    Route::get('get', 'DemoController@get')->name('demo.get');
});


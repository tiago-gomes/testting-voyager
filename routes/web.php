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

//Route::get('/associado/registar','App\Http\Controllers\AssociadoController@registarAssociado');
//Route::post('/associado/novo','App\Http\Controllers\AssociadoController@criarAssociado');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('quotas', ['uses' => 'App\Http\Controllers\QuotaController@index2', 'as' => 'voyager.quotas.index']);
});

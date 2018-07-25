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

Route::get('/perfil/{id}','HomeController@perfil');
Route::get('/preguntas','HomeController@preguntas');


Route::get('/cate','AdminCont@go');
Route::post('/cate','AdminCont@add');


Route::get('/usuarios','HomeController@listar');

Route::get('/del','AdminCont@del');
Route::post('/del','AdminCont@dele');


Route::get('/','HomeController@index');

Auth::routes();
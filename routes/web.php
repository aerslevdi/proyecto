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


Route::get('/mensajes','HomeController@mensj')->middleware('auth');

Route::post('/mensajes','HomeController@mensjD')->middleware('auth');

Route::get('/usuarios{id}','HomeController@listar')->middleware('auth');
Route::post('/usuarios{id}','HomeController@Contac')->middleware('auth');

Route::get('/perfil/{id}','HomeController@perfil');
Route::get('/preguntas','HomeController@preguntas');


Route::get('/cate','AdminCont@go')->middleware('auth');
Route::post('/cate','AdminCont@add')->middleware('auth');


Route::get('/traer','AdminCont@traer');

Route::get('/del','AdminCont@del');
Route::post('/del','AdminCont@dele');


Route::get('/','HomeController@index');

Auth::routes();

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','HomeController@getIndex');
Route::get('inicio','HomeController@getIndex');


Route::get('biografia','HomeController@getBiografy');
Route::get('servicios','HomeController@getServices');

Route::get('terminos-y-condiciones','HomeController@getTerms');

Route::get('cambiar-lenguaje/{lang}','HomeController@changeLang');
Route::post('enviar-email','HomeController@postSendEmail');

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

Route::resource('forms','FormController');

Route::get('/home', 'FormController@home');


Route::get('/Skills', 'FormController@Skills');

Route::get('/Mywork', 'FormController@Mywork');

Route::get('/w_apps', 'FormController@w_apps');

Route::get('/w_design', 'FormController@w_design');

Route::get('/w_photography', 'FormController@w_photography');

Route::get('/w_websites', 'FormController@w_websites');

Route::get('/Hire', 'FormController@Hire');

Route::get('/recommendations', 'FormController@recommendations');
Route::get('/web', 'FormController@web');

Route::get('/home_ad', 'FormController@home_ad');

Route::get('/web_ad', 'FormController@web_ad');

Route::get('/Skills_ad', 'FormController@Skills_ad');

Route::get('/Mywork_ad', 'FormController@Mywork_ad');

Route::get('/w_apps_ad', 'FormController@w_apps_ad');

Route::get('/w_design_ad', 'FormController@w_design_ad');

Route::get('/w_photography_ad', 'FormController@w_photography_ad');

Route::get('/w_websites_ad', 'FormController@w_websites_ad');

Route::get('/Hire_ad', 'FormController@Hire_ad');

Route::get('/recommendations_ad', 'FormController@recommendations_ad');





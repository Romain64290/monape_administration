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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/membres', 'MembresController@index')->name('membres');
Route::get('/reunions', 'ReunionsController@index')->name('reunions');
Route::get('/projets', 'ProjetsController@index')->name('projets');
Route::get('/compatabilite', 'ComptabiliteController@index')->name('comptabilite');
Route::get('/siteweb', 'SitewebController@index')->name('siteweb');
Route::get('/administrateurs', 'AdministrateursController@index')->name('administrateurs');
Route::get('/suggestions', 'SuggestionsController@index')->name('suggestions');


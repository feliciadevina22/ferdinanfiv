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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin','adminDashboardController');
// Route::resource('admin/portofolio','adminPortofolioController');
Route::resource('adminportofolio','adminPortofolioController');


Route::resource('portofolio','PortofoliosController');

Route::get('/home', 'HomeController@index')->name('home');



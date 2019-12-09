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

Route::any('store/search',function(){
    $q = Input::get ( 'q' );
    $item = Store::where('title','LIKE','%'.$q.'%')->get();
    if(count($item) > 0)
        return view('store.index')->withDetails($item)->withQuery ( $q );
    else return view ('store.index')->withMessage('No item found. Try to search again !');
});


Route::resource('admin','adminDashboardController');
// Route::resource('admin/portofolio','adminPortofolioController');
Route::resource('adminportofolio','adminPortofolioController');
Route::resource('adminstore','adminStoreController');
Route::resource('adminprofile','adminProfileController');
// Route::resource('admincontact','ContactsController@indexadmin');
Route::get('/admincontact', [
    'uses' => 'ContactsController@indexadmin'
]);


Route::resource('portofolio','PortofoliosController');
Route::resource('store','StoresController');
Route::resource('about','AboutController');
Route::resource('contact','ContactsController');

Route::get('/home', 'HomeController@index')->name('home');



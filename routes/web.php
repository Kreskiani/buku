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
Route::get('/', function ()
{
	return view('auth.login');
});

Route::get('/dashboard', 'buku_ctrl@index' );
Route::get('/buku/show/{id}', 'buku_ctrl@show');
Route::get('/buku/delete/{id}', 'buku_ctrl@destroy');
Route::get('/buku/edit/{id}', 'buku_ctrl@edit');
Route::get('/buku/create', 'buku_ctrl@create');
Route::post('/buku/store', 'buku_ctrl@store');
Route::post('/buku/update/{id}', 'buku_ctrl@update');

Route::get('/sampel', function ()
	{
		return view('buku/sampel'); 
	});

Auth::routes();


Route::post('/authentication','login\login_ctrl@index')->name('authentication');

Route::get('/home', 'HomeController@index');

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

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('prestasi',function(){
	return view('frontend.prestasi');
});
Route::get('contact',function(){
	return view('frontend.contact');
});
Route::get('alumni',function(){
	return view('frontend.alumni');
});
Route::get('kurikulum',function(){
	return view('frontend.kurikulum');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

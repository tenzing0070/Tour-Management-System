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
    return view('tms/index');
});

Route::get('tour','TourController@index');//index
Route::get('tour/create','TourController@create');

Route::get('tms/index','TmsController@index');
Route::get('tms/index1','TmsController@index1');
Route::get('tms/login','TmsController@login');
Route::get('tms/registration','TmsController@registration');
Route::get('tms/gallery','TmsController@gallery');
Route::get('tms/contact','TmsController@contact');
Route::get('tms/package','TmsController@package');
Route::get('tms/bookpackage','TmsController@bookpackage ');

Route::get('tms/editProfile', function(){
		return view('tms/editProfile');

});

Route::get('/tms/editProfile/{id}', 'TmsController@editProfile');
Route::put('/updateProfile/{id}','TmsController@update');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//booking
Route::get('/tms/demoBooking','DemoController@create');
Route::post('/tms/demoBooking','DemoController@store');
//admin package
Route::get('/tms/program','ProgramController@create');
Route::post('/tms/program','ProgramController@store');

//package add
Route::get('/tms/packageData','ProgramController@index');

//package edit,update,delete
Route::get('tms/packageEdit/{id}','ProgramController@edit');
Route::post('/tms/packageEdit/{id}','ProgramController@create');
Route::delete('tms/packageEdit/{id}','ProgramController@destroy');

//pictureadd,
Route::get('/tms/pictureAdmin','PictureController@index');
Route::post('/tms/pictureAdmin','PictureController@store');

//pic delete
Route::delete('tms/pictureAdmin/{id}','PictureController@destroy');


//admin open function
// Route::get('/tms/packageData',function()
// {
// 	return view('tms/packageData');
// });


Route::get('tms/admin/dashboard','TmsController@dashboard');

//Route::get('/tms/packageEdit/{$id}','ProgramController@create');

// Route::get('/tms/packageEdit','ProgramController@update');
// Route::get('/tms/packageData','ProgramController@destroy');

//unused
// Route::get('tms/register','TmsController@register');
// Route::get('tms/logen','TmsController@logen');
// Route::get('tms/editProfile/{id}','TmsController@editProfile');

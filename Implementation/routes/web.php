<?php
use Illuminate\Support\Facades\Input;
use App\User;
use App\Program;
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
Route::get('pdf', function() {
	$demos = App\demo::all();
	$pdf = PDF::loadView('tms/dataDisplay',['demos' => $demos]);
	return $pdf->download('archive.pdf');	
});
Route::get('/tms/print/users','PrintController@index');
Route::get('/prnpriview','PrintController@prnpriview');
Route::get('tour','TourController@index');//index
Route::get('tour/create','TourController@create');
Route::get('tms/index','TmsController@index');
Route::get('tms/index1','TmsController@index1');
Route::get('tms/login','TmsController@login');
Route::get('tms/registration','TmsController@registration');
Route::get('tms/popup/popupinfo','TmsController@popupinfo');

//!!contact!!
//form ko action work
Route::put('tms/contacts','ContactController@store');


Route::get('tms/contact', function(){
		return view('tms/contact');

});

//admin comments
Route::get('tms/comment','ContactController@index');
Route::get('tms/package','PackageController@show');
Route::get('tms/gallery','PictureController@show');
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
Route::get('/tms/demoBooking/{id}','PackageController@show2');
// Route::post('/tms/demoBooking/{id}','DemoController@store');
Route::post('/tms/demoBooking/{id}','PackageController@create');

//admin package
Route::get('/tms/program','ProgramController@create');
Route::post('/tms/program','ProgramController@store');

//package add
Route::get('/tms/packageData','ProgramController@index');

//package edit,update,delete
Route::get('tms/packageEdit/{id}','ProgramController@edit');
Route::put('tms/packageUpdate/{id}','ProgramController@update');
Route::post('/tms/packageEdit/{id}','ProgramController@create');
Route::delete('tms/packageEdit/{id}','ProgramController@destroy');
//pictureadd,
Route::get('/tms/pictureAdmin','PictureController@index');
Route::post('/tms/pictureAdmin','PictureController@store');
//pic delete
Route::delete('tms/pictureAdmin/{id}','PictureController@destroy');
//admin user booked information display
Route::get('tms/dataDisplay','DataController@index');
//bill display
Route::get('tms/receipt','BillController@index');
//print preview
Route::get('tms/admin/dashboard','TmsController@dashboard');

//searching package
Route::any('tms/package',function(){
	$search= Input::get ('search');
	$program=Program::where('program_name','LIKE','%' .$search. '%')->get();

	if(count($program)>0)
		return view('tms/package')->withDetails($program)->withQuery ($search);
	else return view ('tms/package')->withMessage('No data found');
});


		





//Route::get('/tms/packageEdit/{$id}','ProgramController@create');

// Route::get('/tms/packageEdit','ProgramController@update');
// Route::get('/tms/packageData','ProgramController@destroy');

//unused
// Route::get('tms/register','TmsController@register');
// Route::get('tms/logen','TmsController@logen');
// Route::get('tms/editProfile/{id}','TmsController@editProfile');

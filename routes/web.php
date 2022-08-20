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


Route::get('/','FrontendController@index')->name('index');

Route::post('/search','FrontendController@Search')->name('search');

Route::get('seeker_job','JobController@seeker_job')->name('seeker_job');

Route::get('jobdetail/{id}','FrontendController@jobDetail')->name('jobdetail');

Route::get('alljobs','FrontendController@allJobs')->name('alljobs');

Route::post('search_company','BackendController@search_company')->name('search_company');

Route::get('companydetail/{id}','FrontendController@companyDetail')->name('companydetail');

Route::resource('seekers','SeekerController');

Route::post('applyjob/{id}','FrontendController@applyJob')->name('applyjob');

Route::get('changepassword','SeekerController@password_edit')->name('changepassword');

Route::post('updatepassword/{id}','SeekerController@password_update')->name('updatepassword');

Route::get('extendjobs','JobController@extendJobs')->name('extendjobs');

Route::get('extendjob/{id}','JobController@extendJob')->name('extendjob');

Route::group([
	// 'name' => 'backend.',
	'middleware' => 'role:admin',
	'prefix' => 'backend',

], function (){

Route::get('/dashboard','BackendController@dashboard')->name('dashboard');



Route::get('search_seekers/{id}','BackendController@search_seekers')->name('search_seekers');

Route::get('mail','BackendController@mails')->name('mail');

Route::resource('categories','CategoryController');

Route::resource('companies','CompanyController');

Route::resource('jobs','JobController');

Route::get('jobactive','BackendController@jobActive')->name('jobactive');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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


//Route::group(['prefix'	=>	'api'], function() {
Route::group(['before'	=>	'auth'], function() {

	Route::any('/', function()	{
		return View::make('home');
	});

	Route::resource('client', 'ClientsController');

	Route::resource('staff', 'StaffController');

	Route::get('schedule', [
		'as' => 'schedule', function() {
			return \View::make('schedule/schedule');
	}]);

	Route::get('logout', [
		'as'	=>	'logout',
		'uses'	=>	'App\Controllers\AuthController@logoutAction'
	]);
        
       
          Route::get('clients/index', 'ClientsController@index'
        );
          
          
          Route::get('clients/edit/{mtk}', 'ClientsController@edit');
          
          Route::any('clients/update', 'ClientsController@update');
          
        Route::get('clients/show/{mtk}', 'ClientsController@show'
        );
        Route::get('programs/details/{id}', 'ProgramController@showDetails');
Route::get('needs/details/{id}', 'NeedController@showDetails');
Route::get('needs/all', 'NeedController@getNeeds');
Route::get('needs/create', 'NeedController@createNeed');
   
});
Route::get('login',  function()
{
	return View::make('auth/login');
});

Route::post('login', [
	'as'	=>	'login',
	'uses'	=>	'App\Controllers\AuthController@loginAction'
	//'uses'	=>	'AuthController@loginAction'
]);

Route::post('admin/login', [
	'as'	=>	'admin.login',
	'uses'	=>	'App\Controllers\Admin\AuthController@loginAction'
	//'uses'	=>	'AuthController@loginAction'
]);

Route::get('hello', function(){
    return View::make('hello');
});


App::missing(function($exception) {
	return View::make('home');
});

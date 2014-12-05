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
Route::group(['before' => 'auth'], function() {

    Route::any('/', function() {
        return View::make('home');
    });

    Route::resource('client', 'ClientsController');

    Route::resource('staff', 'StaffController');

    Route::get('schedule', [
        'as' => 'schedule', function() {
    return \View::make('dashboards/schedule/dashboard');
}]);

    Route::get('logout', [
        'as' => 'logout',
        'uses' => 'App\Controllers\AuthController@logoutAction'
    ]);


    Route::get('clients/index', 'ClientsController@index'
    );

    Route::any('clients/dashboard', 'ClientsController@dashboard');

    Route::any('clients/edit/{mtk}', 'ClientsController@edit');
    Route::get('clients/update', 'ClientsController@update');
    Route::any('clients/show/{mtk}', 'ClientsController@show');
    Route::any('clients/create', 'ClientsController@create');
    Route::any('clients/basicinfo', 'ClientsController@basicInfo');
    Route::any('clients/medications', 'ClientsController@medications');
    Route::any('clients/biography', 'ClientsController@biography');

    Route::any('clients/storebasicinfo', 'ClientsController@storeBasicInfo');

    /**
     * ClientMedication Routes
     * 
     */
    Route::any('clientmedication/medication', 'ClientMedicationController@getClientMedication');
    
    /**
     * 
     * Contacts Routes
     */
    Route::post('forms/contact/details', 'ContactController@getDetails');
    
    /**
     * Medication Routes
     */
    Route::any('search/medications', 'MedicationController@getMedicationDropdown');
    Route::any('search/medications', 'MedicationController@getMedicationTable');
    Route::any('medications/details', 'MedicationController@getDetails');
    /*
     * // NEEDS ROUTES
     */

    Route::get('needs/details/{id}', 'NeedController@showDetails');
    Route::get('needs/all', 'NeedController@getNeeds');
    Route::get('needs/create', 'NeedController@createNeed');
    Route::any('needs/save', 'NeedController@postNeed');

    /*
     *  // interventions routes
     */
    Route::get('interventions/details/{id}', 'InterventionController@showDetails');
    Route::get('interventions/all', 'InterventionController@getInterventions');
    Route::get('interventions/create', 'InterventionController@createIntervention');
    Route::any('interventions/save', 'InterventionController@postIntervention');
    /*
     * 
     * Organizations Routes
     */
    Route::any('organizations/dashboard', 'OrganizationController@dashboard');
    Route::get('organizations/index', 'OrganizationController@index');
    Route::get('organizations/create', 'OrganizationController@create');
    Route::get('organizations/information', 'OrganizationController@information');
    Route::any('organizations/dashborad/information/contacts', 'OrganizationController@getContacts');
    Route::any('organizations/dashboard/information/contacts/edit', 'OrganizationController@editContacts');
    Route::any('organizations/save', 'OrganizationController@storeInformation');
    Route::any('organizations/save', 'OrganizationController@storeInformation');
    /*
     * Programs Routes
     */
    Route::get('programs/details/{id}', 'ProgramController@showDetails');
    Route::get('programs/all', 'ProgramController@getPrograms');
    Route::get('programs/create', 'ProgramController@createProgram');
    Route::any('programs/save', 'ProgramController@postProgram');


    /*
     * Actions Routes
     */
    Route::get('actions/details/{id}', 'ActionController@showDetails');
    Route::get('actions/all', 'ActionController@getActions');
    Route::get('actions/create', 'ActionController@createAction');
    Route::any('actions/save', 'ActionController@postAction');
});
/*
 * Geographics Routes
 * 
 */
Route::get('geographic/zipcodes/all', 'ZipcodeController@getindex');
Route::any('geographic/zipcodes/create', 'ZipcodeController@getCreate');
Route::any('geographic/zipcodes/select', 'ZipcodeController@getSelect');
Route::any('geographic/zipcodes/save', 'ZipcodeController@postIndex');
///

/*
 *  Upload Routes --> need to be remanaged
 * 
 */
Route::any('upload/index', 'DataimportController@getIndex');
Route::any('upload/upload', 'DataimportController@postFile');
Route::any('upload/testing', function() {
    return View::make('admin/upload/testing');
});
Route::any('DataimportController@upload', 'DataimportController@upload');
///
Route::get('login', function() {
    return View::make('auth/login');
});

Route::post('login', [
    'as' => 'login',
    'uses' => 'App\Controllers\AuthController@loginAction'
        //'uses'	=>	'AuthController@loginAction'
]);

Route::post('admin/login', [
    'as' => 'admin.login',
    'uses' => 'App\Controllers\Admin\AuthController@loginAction'
        //'uses'	=>	'AuthController@loginAction'
]);

Route::get('hello', function() {
    return View::make('hello');
});

Route::get('test', function() {
    return View::make('testscript');
});

Route::get('surveys/questions/create', 'QuestionController@create');
Route::post('surveys/questions/store', 'QuestionController@store');
Route::post('surveys/questions/index', 'QuestionController@index');

App::missing(function($exception) {
    return View::make('home');
});

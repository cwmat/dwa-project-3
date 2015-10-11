<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * Index - welcome page
 */
Route::get('/', ['as' => 'welcome', function () {
    return view('welcome');
}]);

/*
 * Index - welcome page
 */
Route::controller('/tools','ToolController');

/*
 * Practice - remove before final production
 */
Route::get('/test', ['as' => 'test', function () {
    return "TEST!";
}]);

/*
 * Logs
 */
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

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

Route::get('/', function () {
    return redirect()->route('test');
});

Route::get('/test', ['as' => 'test', function () {
    return "TEST!";
}]);

/*
 * Logs
 */
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

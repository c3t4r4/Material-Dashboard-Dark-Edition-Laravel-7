<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



/* Material Dashboard Dark Routes */
Route::group(['prefix' => 'material-dashboard-dark', 'namespace' => 'MaterialDashboardDark', 'as' => 'material-dashboard-dark.'], function() {
    Route::get('/', 'MaterialDashboardDarkController@dashboard')->name('dashboard');
    Route::get('/blank', 'MaterialDashboardDarkController@blank')->name('blank');
    Route::get('/user', 'MaterialDashboardDarkController@user')->name('user');
    Route::get('/tables', 'MaterialDashboardDarkController@tables')->name('tables');
    Route::get('/typography', 'MaterialDashboardDarkController@typography')->name('typography');
    Route::get('/icons', 'MaterialDashboardDarkController@icons')->name('icons');
    Route::get('/googlemaps', 'MaterialDashboardDarkController@googlemaps')->name('googlemaps');
    Route::get('/leafletmaps', 'MaterialDashboardDarkController@leafletmaps')->name('leafletmaps');
    Route::get('/notifications', 'MaterialDashboardDarkController@notifications')->name('notifications');
    Route::get('/upgrade', 'MaterialDashboardDarkController@upgrade')->name('upgrade');
});

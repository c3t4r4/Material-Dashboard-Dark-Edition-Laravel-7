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
Route::group(['prefix' => 'admin', 'namespace' => 'MaterialDashboardDark', 'as' => 'material-dashboard-dark.'], function() {
    Route::get('/', 'MaterialDashboardDarkController@dashboard')->name('dashboard');
});

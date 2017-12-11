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
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
// user routes
Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');
Route::post('system-management/report/search', 'ReportController@search')->name('report.search');
Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');
Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');
// end of user routes
Route::resource('items-mgmt', 'ItemManagementController');
Route::resource('pos-mgmt', 'PosHeadController');

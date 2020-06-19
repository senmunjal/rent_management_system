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
    return view('superadmin');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/reading', function () {
    return view('reading');
});

Route::post('/submitSuperadmin', 'SuperAdminController@store');
Route::post('/submitadmin', 'AdminController@store');
Route::post('/submitreading', 'ReadingController@store');
Route::post('/submituser', 'User1Controller@store');

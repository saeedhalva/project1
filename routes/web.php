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
    return view('welcome');
});

Route::get('/khadamat', function () {
    return view('khadamat');
});
Route::get('/tamasbama', function () {
    return view('tamasbama');
});
Route::get('/hamkaribama', function () {
    return view('hamkaribama');
});

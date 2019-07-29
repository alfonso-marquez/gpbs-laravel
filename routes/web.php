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
    return view('home');
});

Route::get('/nmb', function () {
    return view('nmb');
});

Route::get('/alp', function () {
    return view('alp');
});

Route::get('/orderform', function () {
    return view('consultation');
});

Route::get('/consultation', function () {
    return view('consultation');
});


Route::get('/contact', [
	'uses' => 'ContactMessageController@create'
]);

Route::post('/contact', [
	'uses' => 'ContactMessageController@store',
	'as' => 'contact.store'
]);
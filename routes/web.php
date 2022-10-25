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


Route::get('/name', function() {
    return 'Shalva';
});

Route::get('/lastname', function() {
    return 'Kotolashvili';
});

Route::get('/hobby', function() {
    return 'Playing piano';
});

Route::get('/age', function() {
    return '20';
});

Route::get('/favanimal', function() {
    return 'Dog';
});

Route::post('/post', 'TheController@post');
Route::put('/put', 'TheController@put');
Route::delete('/delete', 'TheController@delete');
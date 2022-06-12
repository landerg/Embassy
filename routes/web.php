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

Route::get('/', 'HomeController@index');
Route::get('/visas', 'VisaController@index')->name('visas');
Route::post('/visas', 'VisaController@store')->name('visas.store');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@sendEmail')->name('contact.send_email');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/news1', 'News1Controller@index')->name('news1');
Route::get('/news2', 'News2Controller@index')->name('news2');
Route::get('/news3', 'News3Controller@index')->name('news3');


//Route::get('/', function () {
//    return view('welcome');
//});

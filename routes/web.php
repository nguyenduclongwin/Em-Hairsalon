<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('welcome', function () {
    return view('homenew');
});
// Route::prefix('book')->group(function () {
//     //book
//     Route::post('/', 'BookController@store'); 
//     Route::get('/create', 'BookController@create')->name('booking');

//     //findbook
//     Route::get('/booked', 'BookController@show')->name('booked');
//     Route::get('/findbook', 'BookController@findBook')->name('findbook');

//     //calender
//     Route::post('/status-calender', 'BookController@statusCalender')->name('calender');

//     //update
//     Route::get('/{phone}/edit', 'BookController@edit')->name('edit');
//     Route::put('/{id}/{phone}', 'BookController@update')->name('update');

//     //delete
//     Route::delete('/destroy', 'BookController@destroy')->name('delete');

//     //listbook
//     Route::get('/', 'BookController@index')->name('ajax');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


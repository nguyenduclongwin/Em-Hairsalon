<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('book')->group(function () {
    //book
    Route::post('/', 'API\BookController@store'); 
    Route::get('/create', 'API\BookController@create')->name('booking');

    //findbook
    Route::get('/booked', 'API\BookController@show')->name('booked');
    Route::get('/findbook', 'API\BookController@findBook')->name('findbook');

    //calender
    Route::post('/status-calender', 'API\BookController@statusCalender')->name('calender');

    //update
    Route::get('/{phone}/edit', 'API\BookController@edit')->name('edit');
    Route::put('/{id}/{phone}', 'API\BookController@update')->name('update');

    //delete
    Route::delete('/destroy', 'API\BookController@destroy')->name('delete');

    //listbook
    Route::get('/', 'API\BookController@index')->name('ajax');
});
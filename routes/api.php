<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//home
Route::prefix('index')->group(function () {
    //Nav
    Route::put('/','API\IndexController@updateNav');
    Route::get('/','API\IndexController@showNav');
    //slide
    Route::post('/slide','API\IndexController@storeSlide');
    Route::put('/slide/{id}','API\IndexController@updateSlide');
    Route::delete('/slide/{slide}','API\IndexController@deleteSlide');
    //combo
    Route::post('/combo','API\IndexController@createCombo');
    Route::put('/combo/{id}','API\IndexController@updateCombo');
    Route::delete('/combo/{combo}','API\IndexController@deleteCombo');
    //home content
    Route::get('/home','API\IndexController@index');
});
//service
Route::prefix('service')->group(function(){
    Route::post('/','API\ServiceController@store');
    Route::put('/{id}','API\ServiceController@update');
    Route::delete('/{service}','API\ServiceController@delete');
    Route::get('/','API\ServiceController@index');
});
//store
Route::prefix('emshop')->group(function(){
    Route::post('/','API\ProductController@store');
    Route::put('/{id}','API\ProductController@update');
    Route::delete('/{product}','API\ProductController@destroy');
    Route::get('/{id}','API\ProductController@show');
    Route::get('/','API\ProductController@index');
});
//contact
Route::prefix('contact')->group(function(){
    Route::post('/','API\ContactController@store');
    Route::put('/{id}','API\ContactController@update');
    Route::delete('/{contact}','API\ContactController@delete');
    Route::get('/','API\ContactController@index');
    
});
//book
Route::prefix('book')->group(function () {
    //book
    Route::post('/', 'API\BookController@store'); 
    Route::get('/create', 'API\BookController@create')->name('booking');

    //findbook
    Route::get('/booked', 'API\BookController@show')->name('booked');
    Route::get('/findbook', 'API\BookController@findBook')->name('findbook');

    //calender
    Route::get('/status-calender', 'API\BookController@statusCalender')->name('calender');

    //update
    Route::get('/{phone}/edit', 'API\BookController@edit')->name('edit');
    Route::put('/{id}/{phone}', 'API\BookController@update')->name('update');

    //delete
    Route::delete('/destroy', 'API\BookController@destroy')->name('delete');

    //listbook
    Route::get('/', 'API\BookController@index')->name('ajax');
});
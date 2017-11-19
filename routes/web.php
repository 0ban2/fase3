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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::resource('/', 'HomepageController', ['only' => [
    'index', 'show' 
    ]]);



Auth::routes();


Route::group(['middleware' => ['auth']], function(){

    Route::resource('/reservar', 'ReservationController', ['only' => [
    'index', 'show' 
    ]]);

});




Route::group(['middleware' => ['web']], function(){

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@index')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('cities/{id}', 'Auth\RegisterController@getCities');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');


   
    

});
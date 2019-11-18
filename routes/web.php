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

Route::get('/master', function () {
    return view('master');
});

Auth::routes();

/*
 * Just Route for Karya
 * */
Route::middleware('auth')->group(function(){
Route::get('/karya','KaryaController@index')->name('karya.index');
Route::get('/karya/show/{nim}','KaryaController@show')->name('karya.show');
Route::get('/karya/edit/{nim}','KaryaController@edit')->name('karya.edit');
Route::post('/karya/update','KaryaController@update')->name('karya.update');
Route::post('/karya/store','KaryaController@store')->name('karya.store');
Route::get('/karya/destroy/{nim}','KaryaController@destroy')->name('karya.destroy');
});


Route::get('/home', 'HomeController@index')->name('home');


// Pemanggilan Menu2
Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/Error', function () {
    return view('Error');
});

Route::get('/Table', function () {
    return view('Table');
});

Route::get('/Profile', function () {
    return view('Profile');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/ForgotP', function () {
    return view('ForgotP');
});

Route::get('/tes', function () {
    return view('dashboard');
});


// Pemanggilan Menu2

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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/admin', 'WelcomeController@admin')->name('admin');


Route::resource('/galerie', 'GalerieController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/newsletter', 'NewsletterController@index')->name('newsletter');
Route::post('/newsletter', 'NewsletterController@store')->name('storenew');
Route::resource('/contact', 'ContactController');
Route::resource('/role', 'RoleController');
Route::resource('/team', 'TeamController');



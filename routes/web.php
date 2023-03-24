<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/','FrontendController@homepage');
 route::get('/about','FrontendController@aboutPage')->name('about.us');
 route::get('/create','FrontendController@newUser')->name('new.user');

 route::post('/save-user','FrontendController@save')->name('save.user');

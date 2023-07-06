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


Route::group(['namespace' => 'front',], function () {

    Route::get('/', 'homeController@index') -> name('index');


    Route::get('projects' ,'projectsController@projects') -> name('projects');

    Route::get('news' ,'newsController@news') -> name('news');

    Route::get('aboutUs' ,'aboutUsController@aboutUs') -> name('aboutUs');

    Route::get('videos' ,'videosController@videos') -> name('videos');

});






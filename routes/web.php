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


#   GUEST

Route::get('/','guestController@index')->name('home');

Route::get('/about', 'guestController@about')->name('about');

#   ADMIN

Route::get('/admin', 'adminController@index');

#   MEMBER

Route::get('/member', 'memberController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('homeLogin');


    #Upload IMG
        Route::get('/Upload' , 'ProductController@imgUpload')->name('imgUpload');

        Route::post('/UploadImg' , 'ProductController@imgUploadPost')->name('imgUploadPost');

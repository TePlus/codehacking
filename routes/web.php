<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', function(){
    return view('admin.index');
});

Route::resource('admin/users','AdminUsersController');


//Route::group(['middleware'=>'admin'], function(){
//    Route::resource('admin/users', 'AdminUsersController');
//    Route::resource('admin/posts', 'AdminPostsController');
//    Route::resource('admin/categories', 'AdminCategoriesController');
//    Route::resource('admin/media', 'AdminMediasController');
//    // To create a different route, using a personalized name for this URI
//    // We need to create a function like this, like functions created in CMS
//    // Exercises.
////    Route::get('admin/media/upload', ['as'=>'admin.media.upload', function()]);
//});

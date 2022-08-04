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

//  Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend.index');
// });

// index page 
Route::get('/','Frontend\HomeController@index')->name('home');


//contact us page
Route::get('/contact','Frontend\HomeController@contact')->name('contact');

// about us page 
Route::get('/about','Frontend\HomeController@about')->name('about');


// sample page
Route::get('/sample','Frontend\HomeController@sample')->name('sample');

// single vlog page
Route::get('/vlogs/{id}','Frontend\HomeController@singleVlog')->name('vlogs.single');

// add post
Route::get('/add-post','Frontend\HomeController@addPost')->name('addPost');
// create post
Route::post('/add-post','Frontend\HomeController@createPost')->name('createPost');
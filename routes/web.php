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

Route::get('/', "PagesController@Index");

Route::get('/about', "PagesController@About");

Route::get('/services', "PagesController@Services");

Route::resource('posts', "PostsController");

// Route::get("/users/{id}", function($id) {
//     return "The User With ID of: " . $id;
// });
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

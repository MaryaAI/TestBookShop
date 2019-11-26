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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::resource('books', 'BookController');
Route::get('/home', 'HomeController@index');

Route::prefix('admin')->name('admin.')->middleware('can:update-books')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');

    Route::resource('categories', 'CategoryController');
    
    Route::resource('publishers', 'PublisherController');
    
    Route::resource('authors', 'AuthorController');

    Route::get('users', 'UserController@index')->name('users.index');
    // Route::get('all/users', 'UserController@getUsers')->name('get.users');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    Route::patch('users/{user}', 'UserController@changeAdministrationLevel')->name('users.change');
});
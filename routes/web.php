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

use Illuminate\Support\Facades\Response;

Route::get('/', 'BooksController@index')->name('index');
Route::get('/search', 'BooksController@search')->name('search');

//TourController
Route::resource('/book', 'BooksController');


Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/{category}', 'CategoryController@show')->name('category.show');
Route::get('/author', 'AuthorController@index')->name('author.index');
Route::get('/author/{author}', 'AuthorController@show')->name('author.show');

Route::get('/download/{id}/name/{name}','BooksController@getDownload')->name('book.download');

Route::group(['middleware'=>['auth', 'admin']], function (){
    Route::resource('admin/books', 'AdminBookController');
    Route::get('admin/order', 'OrderController@index')->name('order');
});
//Route::get('/admin/book', 'AdminBookController@index')->name('admin.book.index')->middleware('admin');

Auth::routes();
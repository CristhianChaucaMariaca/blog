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

Route::redirect('/', 'blog');

Auth::routes();

//Web
Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('Entrada/{slug}', 'Web\PageController@post')->name('post');
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}', 'Web\PageController@tag')->name('tag');

//Web - Services
Route::get('services', 'Web\PageController@services')->name('services');
Route::get('service/{id}', 'Web\PageController@service')->name('service');

//Web - Products
Route::get('productos','Web\PageController@products')->name('productos');
Route::get('producto/{id}', 'Web\PageController@product')->name('producto');


//**************************************************************************/

//admin
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');

//Admin - Services
Route::resource('servicios', 'ServiceController');

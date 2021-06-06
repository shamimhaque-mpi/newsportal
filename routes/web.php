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


Auth::routes();
//Frontend Controller Start Here
Route::get('/', 'frontend\HomeController@index')->name('home');

Route::get('/about', 'frontend\HomeController@about')->name('about');
Route::match(['GET', 'POST'], '/jobs/{id?}', 'frontend\HomeController@jobs')->name('jobs');
Route::get('/contact', 'frontend\HomeController@contact')->name('contact');
Route::get('/terms', 'frontend\HomeController@terms')->name('terms');
Route::get('/blog', 'frontend\HomeController@blog')->name('blog');
Route::get('/blog_details', 'frontend\HomeController@blog_details')->name('blog_details');
Route::get('/faq', 'frontend\HomeController@faq')->name('faq');
Route::get('jobs_details/{id}', 'frontend\HomeController@jobs_details')->name('jobs_details');
//For Personal Design Start
Route::get('/typography', 'frontend\HomeController@typography')->name('typography');
Route::get('/icons', 'frontend\HomeController@icons')->name('icons');
Route::get('/coming_soon', 'frontend\HomeController@coming_soon')->name('coming_soon');
Route::get('/alert', 'frontend\HomeController@alert')->name('alert');
Route::get('/error_404', 'frontend\HomeController@error_404')->name('error_404');
//For Personal Design End
//Frontend Controller End Here

Route::get('/dashboard', 'backend\DashboardController@index')->name('dashboard');

// category controller
Route::get('/category', 'backend\CategoryController@index')->name('category');
Route::post('/category/store', 'backend\CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}', 'backend\CategoryController@edit')->name('category.edit');
Route::post('/category/update', 'backend\CategoryController@update')->name('category.update');
Route::get('/category/destroy/{id}', 'backend\CategoryController@destroy')->name('category.destroy');

// post controller
Route::get('/post', 'backend\PostController@index')->name('post');
Route::get('/post/create', 'backend\PostController@create')->name('post.create');
Route::post('/post/store', 'backend\PostController@store')->name('post.store');
Route::get('/post/show/{id}', 'backend\PostController@show')->name('post.show');
Route::get('/post/edit/{id}', 'backend\PostController@edit')->name('post.edit');
Route::post('/post/update', 'backend\PostController@update')->name('post.update');
Route::get('/post/destroy/{id}', 'backend\PostController@destroy')->name('post.destroy');


// sponsor controller
Route::get('/sponsor', 'backend\SponsorController@index')->name('sponsor');
Route::get('/sponsor/create', 'backend\SponsorController@create')->name('sponsor.create');
Route::post('/sponsor/store', 'backend\SponsorController@store')->name('sponsor.store');
Route::get('/sponsor/show/{id}', 'backend\SponsorController@show')->name('sponsor.show');
Route::get('/sponsor/edit/{id}', 'backend\SponsorController@edit')->name('sponsor.edit');
Route::post('/sponsor/update', 'backend\SponsorController@update')->name('sponsor.update');
Route::get('/sponsor/destroy/{id}', 'backend\SponsorController@destroy')->name('sponsor.destroy');

// ajax controller
Route::get('/ajax/result', 'backend\AjaxController@result')->name('ajax.result');
Route::get('/ajax/join', 'backend\AjaxController@join')->name('ajax.join');
route::post('/ajax/post', 'frontend\HomeController@postLimit')->name('ajax.post');

// setting controller
Route::get('/setting', 'backend\SettingController@index')->name('setting');
Route::post('/setting/store', 'backend\SettingController@store')->name('setting.store');
Route::post('/setting/update', 'backend\SettingController@update')->name('setting.update');


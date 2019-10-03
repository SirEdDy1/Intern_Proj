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

use Illuminate\Support\Facades\Route;



Route::group([
    'namespace' => 'guest'
], function ($router) {
    Route::get('/', 'GuestController@home');
    Route::get('/about', 'GuestController@about');
    Route::get('/news', 'GuestController@news');
    Route::get('/activity', 'GuestController@activity');
    Route::get('/schedule', 'GuestController@schedule');
    Route::get('/contact', 'GuestController@contact');
    Route::get('/gallery', 'GuestController@gallery');
    Route::post('/contact', 'GuestController@contact_post')->name('contact.post');
});



Route::group([
    'namespace' => 'admin'
], function ($router) {
    Route::get('/login', 'AdminController@login')->name('login');
    Route::get('/admin', 'AdminController@dashboard');
    Route::get('admin/document', 'AdminController@managepost');
    Route::get('admin/gallery', 'AdminController@managegallery');
    Route::get('admin/post', 'AdminController@managepost');
    Route::get('admin/post/{id}', 'AdminController@editpost');
    Route::get('admin/contact', 'AdminController@managecontact');
    Route::get('admin/contact/{id}','AdminController@show')->name('admin.contact.detail');
    Route::post('admin/gallery','AdminController@admin_image_post')->name('admin.image.post');
    Route::post('admin/gallery/{id}','AdminController@delete')->name('delete');

    Route::resource('contacts','AdminController');
});


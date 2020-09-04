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

Route::get('/', 'GuestController@index')->name('guest.index');

Route::get('/speakers','GuestController@speakers')->name('guest.speakers');
Route::get('/about','GuestController@about')->name('guest.about');
Route::get('/contact','GuestController@contact')->name('guest.contact');
Route::get('/categories','GuestController@viewAllCategories')->name('guest.categories');
Route::get('/vidoes/watch/{video_id}','GuestController@watchVideo')->name('guest.videos.watch');
Route::get('/videos/categories/{category_id}','GuestController@videosByCategory')->name('guest.categories.videos');
Route::post('/newsletter/subscribe','GuestController@subscribeToNewsletter')->name('guest.newsletter.subscribe');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['web','auth']],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/dashboard/admin/video', 'AdminController@video')->name('admin.video');
    Route::post('/dashboard/admin/video', 'AdminController@createVideo')->name('admin.video.create');
    Route::get('/dashboard/admin/video/{video_id}/edit', 'AdminController@editVideo')->name('admin.video.edit');
    Route::patch('/dashboard/admin/video', 'AdminController@updateVideo')->name('admin.video.update');
    Route::post('/dashboard/admin/video/change-featured-state', 'AdminController@changeFeaturedState')->name('admin.video.change-featured-state');

    Route::get('/dashboard/admin/playlist','AdminController@playlist')->name('admin.playlist');
    Route::post('/dashboard/admin/playlist','AdminController@createPlaylist')->name('admin.playlist.create');
    Route::get('/dashboard/admin/playlist/{id}','AdminController@viewPlaylist')->name('admin.playlist.view');
    Route::get('/dashboard/admin/playlist/{id}/edit','AdminController@editPlaylist')->name('admin.playlist.edit');

    Route::post('/dashboard/admin/playlist/add-video-to-playlist','AdminController@addVideoToPlaylist')->name('admin.playlist.add-video');
    Route::delete('/dashboard/admin/playlist/remove-video-from-playlist','AdminController@removeVideoFromPlaylist')->name('admin.playlist.remove-video');

    Route::get('/dashboard/admin/newsletter/subscribers','AdminController@newsletterSubscribers')->name('admin.newsletter.subscribers');
});
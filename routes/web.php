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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'indexController@indexpage')->name('index');
Route::get('/innerPages/give', 'giveController@give')->name('give');
Route::get('innerpages/books', 'recommendedmaterialController@recommendedmaterial')->name('books');
Route::get('/innerPages/materialDonate', 'materialDonationController@materialDonation')->name('materialDonate');
Route::get('/innerPages/tithe', 'titheController@tithe')->name('tithe');
Route::get('/innerPages/gallery', 'galleryController@gallery')->name('gallery');
Route::get('/innerPages/event', 'eventController@event')->name('event');
Route::get('/innerPages/contact', 'contactController@contact')->name('contact');
Route::get('/innerPages/history', 'historyController@history')->name('history');
Route::get('/innerPages/branches', 'branchesController@branches')->name('branches');
Route::get('/innerPages/men', 'menController@men')->name('men');
Route::get('/innerPages/women', 'womenController@women')->name('women');
Route::get('/innerPages/children', 'childrenController@children')->name('children');
Route::get('/innerPages/youth', 'youthController@youth')->name('youth');
Route::get('/innerPages/believes', 'believesController@believes')->name('believes');
Route::get('/innerPages/nationalExco', 'nationalExcoController@nationalExco')->name('nationalExco');
Route::get('/innerPages/leadership', 'leadershipController@leadership')->name('leadership');
Route::get('/innerPages/blog', 'blogController@blog')->name('blog');
Route::get('/innerPages/nationalSubscription', 'nationalSubscriptionController@nationalSubscription')->name('nationalSubscription');
Route::get('/innerPages/podcast', 'podcastController@podcast')->name('podcast');
Route::get('/innerPages/announcement', 'announcementController@announcement')->name('announcement');
Route::get('/innerPages/news', 'newsController@news')->name('news');

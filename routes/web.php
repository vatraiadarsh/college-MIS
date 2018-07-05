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
Route::get('/','PagesController@index');
Route::get('/about',                'PagesController@about');
Route::get('/admission',            'AdmissionController@index');
// for admission AdmissionController is made bec we have to make crud for it to insert adn retrive from database
Route::get('/awards',               'PagesController@awards');
Route::get('/contact-us',           'PagesController@contactUs');
Route::get('/departments',          'PagesController@departments');
Route::get('/gallery-photo',        'PagesController@galleryPhoto');
Route::get('/research',             'PagesController@research');
Route::get('/seminar',              'PagesController@seminar');

Route::get('/course-details',       'CourseController@courseDetails');
Route::get('/all-courses',          'CourseController@allCourses');

Route::get('/blog',                 'BlogController@blog');
Route::get('/blog-details',         'BlogController@blogDetails');

Route::get('/events',               'EventController@events');
Route::get('/event-details',        'EventController@eventDetail');
Route::get('/event-register',       'EventController@eventRegister');

Route::get('/facilities',           'FacilitiesController@facilities');
Route::get('/facilities-details',   'FacilitiesController@facilitiesDetails');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/','DashboardController@index');
    Route::resource('/courses','Admin\CourseController');
});
Auth::routes();


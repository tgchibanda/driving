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
 //   return view('welcome');
//});

Route::get('/hie', function () {
    return "<h1>Hello Takunda</h1>";
});

/*
Route::get('/about', function () {
    return view('pages.about');
});
*/


Route::get('/users/{id}/{name}', function ($name, $id) {
    return 'This is user '.$name.' with is '.$id;
});


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/profile', 'PagesController@profile');
Route::post('/profile', 'PagesController@update_avatar');
Route::get('/testing', 'TestingsController@index');
Route::post('/testingCreate', 'TestingsController@create');
Route::get('/posts/home', 'PostsController@home');
Route::resource('posts', 'PostsController');
Route::get('/locations', 'LocationsController@index');
Route::get('/createLocation', 'LocationsController@create');
Route::post('/createLocation', 'LocationsController@store');
Route::get('/schools', 'SchoolsController@index');
Route::get('/createSchool', 'SchoolsController@create');
Route::post('/createSchool', 'SchoolsController@store');

Route::get('/test', function(){
    return Auth::user()->test();
});
Route::get('/followSchool/{id}', 'HomeController@followSchool');
Route::get('/requests', 'HomeController@requests');
Route::get('/findSchools', 'HomeController@findSchools');
Route::get('/accept/{id}/{name}', 'HomeController@accept');
Route::get('/following', 'HomeController@following');
Route::get('/viewSchool/{id}', 'HomeController@viewSchool');
Route::resource('schoolreview', 'SchoolReviewController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/yourPosts', 'HomeController@yourPosts');


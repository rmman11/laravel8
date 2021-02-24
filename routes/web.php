<?php

use Illuminate\Support\Facades\Route;

use App\Product;
use Illuminate\Support\Facades\Request;

date_default_timezone_set('Europe/Bucharest'); 
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





Route::get('/', 'FrontEnd\LearnLaravel@index')->name('welcome');
Route::get('/about', 'FrontEnd\LearnLaravel@about')->name('about');
Route::get('/view/{id}', 'FrontEnd\HomeController@view')->name('frontend.pages.view');

Route::get('/product/{id}', 'FrontEnd\LearnLaravel@product')->name('products');


   Route::resource('product', 'FrontEnd\LearnLaravel');

Auth::routes();



Route::post('/email','FrontEnd\EmailController@create_email')->name('email');
Route::get('/login', 'Auth\LoginController@showWriterLoginForm')->name('login');
Route::get('/register', 'Auth\RegisterController@showWriterRegisterForm')->name('register');

Route::get('/home', 'FrontEnd\HomeController@index')->name('pages.home');
#Route::get('/photos', 'FrontEnd\PhotosController@index')->name('photos');
#Route::post('/image/upload', 'FrontEnd\PhotosController@upload');

Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');





Route::get('/tasks', 'FrontEnd\HomeController@tasks')->name('tasks');
Route::post('/task', 'FrontEnd\HomeController@store');
Route::delete('/task/{task}', 'FrontEnd\HomeController@destroy');
Route::get('/task/{id}', 'FrontEnd\HomeController@show')->name('tasks.show');
Route::get('/edit_task/{id}', 'FrontEnd\HomeController@edit_task')->name('tasks.edit');;
Route::patch('tasks/update/{id}',[
    'as' => 'task.update',
    'uses' => 'FrontEnd\HomeController@update'
]);


Route::get('/test', 'FrontEnd\HomeController@test')->name('test');



Route::get('/search', 'FrontEnd\LearnLaravel@search')->name('search');
Route::get('/sidebar','FrontEnd\LearnLaravel@sidebar')->name('sidebar');


 Route::get('/view/{id}', 'FrontEnd\LearnLaravel@show')->name('show');

 Route::get('/fqa', 'FrontEnd\HomeController@fqa')->name('fqa');


Route::get('/contact','FrontEnd\ContactController@contact')->name('contact');
Route::post('/contact', ['as'=>'contactus.store','uses'=>'FrontEnd\ContactController@contactUSPost']);


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'],function() {

	Route::middleware('auth:admin')->group(function() {

		Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

    Route::get('/email', 'DashboardController@email')->name('pages.email');
     Route::delete('/destroy/{id}', 'DashboardController@destroy')->name('pages.destroy');
    Route::get('/calendar', 'DashboardController@calendar')->name('pages.calendar');


		//Route::get('/profile', 'DashboardControlonler@profile')->name('profile');


      // CategoryController categories
      Route::get('/categories','CategoriesController@index')->name('index');
       Route::post('/categories','CategoriesController@changeStatus')->name('categories.changeStatus');
      Route::delete('categories/categories', 'CategoriesController@destroy')->name('categories.destroy');
      Route::resource('categories', 'CategoriesController');


            // CategoryController Posts
      Route::get('/posts','PostController@index')->name('index');
      Route::get('posts', 'PostController@create')->name('create');
      Route::delete('posts/destroy', 'PostController@massDestroy')->name('posts.massDestroy');
      Route::resource('posts', 'PostController');



        // Users

       Route::get('/users','UsersController@index')->name('index');
       Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
       Route::resource('users', 'UsersController');



       // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');



         // Venues
     Route::get('/venues','VenuesController@index')->name('index');
    Route::delete('venues/destroy', 'VenuesController@massDestroy')->name('venues.massDestroy');
    Route::resource('venues', 'VenuesController');

    // Events
    Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
    Route::resource('events', 'EventsController');

    // Meetings
    Route::delete('meetings/destroy', 'MeetingsController@massDestroy')->name('meetings.massDestroy');
    Route::resource('meetings', 'MeetingsController');



      // Products
      Route::delete('products/destroy', 'ProductController@destroy')->name('products.massDestroy');
      Route::resource('products', 'ProductController');




  //API Payments

          Route::get('/payments','PaymentsController@index')->name('index');
          Route::resource('payments', 'PaymentsController');

        Route::get('/cancel', 'PaymentsController@cancel')->name('payment.cancel');
        Route::get('payment/success', 'PaymentsController@success')->name('payment.success');



//Order

           Route::get('/', 'OrderController@index')->name('orders.index');
           Route::get('/{order}/show', 'OrderController@show')->name('orders.show');
          Route::resource('order', 'OrderController');





		Route::post('/logout','AdminUserController@logout')->name('logout');


	});

	Route::get('/admin/', 'AdminUserController@index')->name("index");

	Route::resource('/login', 'AdminUserController');
});

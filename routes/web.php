<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\Http\Controllers\HomeController@welcome')->name('welcome');
Route::resource('/contact',  'App\Http\Controllers\ContactUsController');
Route::get('/about',  'App\Http\Controllers\HomeController@aboutUs')->name('aboutus');
Route::get('/atal-tinkering-labs',  'App\Http\Controllers\HomeController@atl')->name('atl');
Route::get('/stem-lab',  'App\Http\Controllers\HomeController@stem')->name('stem-lab');
Route::get('/robotics-lab',  'App\Http\Controllers\HomeController@robotics')->name('robotics-lab');
Route::get('/coding-lab',  'App\Http\Controllers\HomeController@coding')->name('coding-lab');
Route::get('/maths-lab',  'App\Http\Controllers\HomeController@maths')->name('maths-lab');
Route::get('/language-lab',  'App\Http\Controllers\HomeController@language')->name('language-lab');
Route::get('/science-lab',  'App\Http\Controllers\HomeController@science')->name('science-lab');
Route::get('/evs-lab',  'App\Http\Controllers\HomeController@evs')->name('evs-lab');

// Route::get('login', [
//     'as' => 'login',
//     'uses' => 'Auth\LoginController@showLoginForm'
// ])->name('login');

Auth::routes();

Route::get(
    '/home',
    [App\Http\Controllers\HomeController::class, 'index']
)->name('home');

/** Admin Routes Start Not included in maintenance*/

Route::namespace('App\Http\Controllers\Admin\Auth')->group(function () {
    Route::get('/dc/login', 'AdminLoginController@showLoginForm')->name('admin.login.form');
    Route::post('/dc/secure/login', 'AdminLoginController@login')->name('admin.login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin.'], function () {
    Route::namespace('App\Http\Controllers\Admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
    Route::resource('brand', 'App\Http\Controllers\BrandController');
    Route::resource('course', 'App\Http\Controllers\CourseController');
    Route::resource('sliders', 'App\Http\Controllers\SliderController');
    Route::resource('bootcamps', 'App\Http\Controllers\CategoryController');
    Route::post('/media/file-delete', 'App\Http\Controllers\MediaController@delete_media')->name('delete_media');
    Route::post('/media/save', 'App\Http\Controllers\MediaController@mediaSave')->name('media.save');

    Route::get('/users', function () {
        // Route assigned name "admin.users"...
        return 'admin.users';
    })->name('users');
});

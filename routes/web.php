<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
// Route::get('/contact', function () {
//     return view('layouts.frontend.contact-us');
// });
Route::get('/contact', [ContactUsController::class, 'create'])->name('contact');
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
])->name('login');

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


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
        return 'admin.users';
    })->name('users');
    Route::get('/dashboard', function () {
        // Route assigned name "admin.dashboard"...
        return 'admin.dashboard';
    })->name('dashboard');
    
});

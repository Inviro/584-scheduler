<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;


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
    return view('landing.landingPage'); //defaulted to landing page, where user can then login to the application
});

Route::get('/login', function () {
    return view('auth.login'); // defaulted to initial login screen we can keep this here or change it later on
});

Route::get('auth/google', 'App\Http\Controllers\Auth\GoogleController@redirectToProvider');
Route::get(env('GOOGLE_REDIRECT'), 'App\Http\Controllers\Auth\GoogleController@handleProviderCallback');

// Everything wrapped in here will be protected from back history
Route::group(['middleware' => ['prevent-back-history']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');
    Route::post('updateProfile', [App\Http\Controllers\HomeController::class, 'updateProfile']);
    Route::post('toggleDarkMode', [App\Http\Controllers\HomeController::class, 'toggleDarkMode']);
    Route::resource('home', PostsController::class);
});

// Will require user to be verified before being able to access site
Auth::routes(['verify' => true]);

// resource  controller to handle all CRUD request to show events on home dashboard

// Route::resource('events', EventsController::class);


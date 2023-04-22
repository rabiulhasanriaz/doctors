<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::group(['controller' => 'App\Http\Controllers\Frontend\HomeController' , 'as' => 'frontend.'], function(){
    Route::get('blogs','tipsDetails')->name('blogs');
    Route::get('blog-details/{id}','blogDetails')->name('blog-details');
});

Route::get('/login','App\Http\Controllers\Auth\AuthController@login')->name('login-page');
Route::post('/process-login','App\Http\Controllers\Auth\AuthController@processLogin')->name('login');
Route::get('/logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');
Route::group(['prefix' => 'admin', 'controller' => 'App\Http\Controllers\Backend\BackendController', 'as' => 'backend.' , 'middleware' => 'userAccess'],function(){
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::group(['prefix' => 'about' , 'as' => 'about.'], function(){
        Route::get('/about', 'about')->name('about-page');
        Route::post('add-about','addAbout')->name('about-add');
    });

    Route::group(['prefix' => 'education' , 'as' => 'education.'],function(){
        Route::get('education','education')->name('education-page');
        Route::post('education-add','educationAdd')->name('education-add');
    });

    Route::group(['prefix' => 'experience' , 'as' => 'exp.'],function(){
        Route::get('experience','experience')->name('exp-page');
        // Route::post('education-add','educationAdd')->name('education-add');
    });

    Route::group(['prefix' => 'tips' , 'as' => 'tips.'], function(){
        Route::get('tips-page', 'tipsPage')->name('tips-page');
        Route::post('tips-add', 'tipsAdd')->name('tips-add');
        Route::get('blog-delete/{id}', 'blogDelete')->name('blog-delete');
    });
    
});

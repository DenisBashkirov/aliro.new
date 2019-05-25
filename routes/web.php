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


Route::get('/style', function () {
    return view('frontend.pages.style');
});


Route::get('/style/articles', function () {
    return view('frontend.pages.style.articles');
});

Route::get('/style/profiles', function () {
    return view('frontend.pages.style.profiles');
});


Auth::routes();


Route::get('/', 'Frontend\PagesOutputController@home')->name('home');

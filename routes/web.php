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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::group(
    ['namespace'=>'Backend', 'prefix'=>'/admin'],
    function () {
        Route::resource('/page_categories', 'PageCategoriesController');
        Route::resource('/pages', 'PagesController');
        Route::resource('/nav_menu_items', 'NavMenuItemsController');
        Route::resource('/nav_dropdown_items', 'NavDropdownItemsController');
    }
);


Route::group(
    ['namespace'=>'Frontend'],
    function () {

        $pages = \App\Page::all();

        foreach ($pages as $page)
        {
            Route::get($page->urn, 'PagesOutputController@' . $page->slug)->name($page->slug);
        }

        Route::get('/products/{product}', 'PagesOutputController@product')->name('product');
    }
);

Route::get('/home', function () {
    return redirect()->route('home');
});
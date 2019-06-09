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
            if ($page->category)
                Route::get($page->category->slug . '/{page_slug}', 'PagesOutputController@' . $page->category->slug)->name($page->category->slug);
            else
                Route::get($page->urn, 'PagesOutputController@' . $page->slug)->name($page->slug);
        }

        Route::post('/thanks', ['uses'=>'PagesOutputController@thanks', 'as'=>'thanks']);
    }
);

Route::get('/home', function () {
    return redirect()->route('home');
});
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {
    return view('welcome');
});

Route::delete('/', function () {
    return view('welcome');
});
*/

//Route::get("/","myResourceController@index");

//Route::get("/show/{name}","myResourceController@show");

    Route::get('/', "myController@index");

    Route::get('/contact_us', "myController@contact_us");

    Route::get('/login', "myController@login");

    Route::get('/logout', "myController@logou");

    Route::get('/products', "myController@products");

    Route::get('/products/category', "myController@products_category");

    Route::get('/products/brands', "myController@products_brands");

    Route::get('/products/details/{id}', "myController@products_details");

    Route::get('/blog', "myController@blog");

    Route::get('/blog/post/{id}', "myController@blog_post");

    Route::get('/search/{key_word}',"myController@search");

    Route::get('/cart', "myController@cart");

    Route::get('/checkout', "myController@checkout");
    
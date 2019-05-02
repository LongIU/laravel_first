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

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('about', function () {
    return view('frontend.about');
})->name('about');


Route::get('products', function () {
    return view('frontend.products');
})->name('products');

Route::get('store', function () {
    return view('frontend.store');
})->name('store');

Route::get('users/{name?}', function ($name = "chase")
{
    return 'Hello, I am ' .$name;
});

Route::prefix('admin')->group(function ()
{
    Route::get('users', function ()
    {
        return 'welcome';
    });
    Route::get('long', function ()
    {
        return view( 'tokisaki.welcome', ['name' => 'LONG']);
    });
});


Route::get('test', function()
{
    return view('tokisaki.long', ['name' => 'Kurumi' , 'number' => '520']);
});

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
    return view('welcome');
});

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
    Route::get('long/{id?}', function ($id = 'tokisaki')
    {
        return $id;
    });
});


<?php

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
    //return view('welcome');
    return view("home");
});

Route::get('login', function () {
    return view("auth.login");
});

Route::get('logout', function () {
    return "logout";
});

Route::group(['prefix' => 'productos'], function () {
    Route::get('/', function () { return view("productos.index"); });
    Route::get('show/{id}', function ($id) { return view("productos.show", array("id" => $id)); });
    Route::get('create', function () { return view("productos.create"); });
    Route::get('edit/{id}', function ($id) { return view("productos.edit", array("id" => $id)); });
});

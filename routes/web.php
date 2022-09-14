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
Route::get('/home', function () {
    $menu = ['home'=>'Home', 'contact'=>'Contact', 'about'=>'About', 'blog'=>'Blog'];
    return view( 'home', compact('menu') );
});

Route::get('/contact', function () {
    $menu = ['home'=>'Home', 'contact'=>'Contact', 'about'=>'About', 'blog'=>'Blog'];
    return view( 'contact', compact('menu') );
});

Route::get('/about', function () {
    $menu = ['home'=>'Home', 'contact'=>'Contact', 'about'=>'About', 'blog'=>'Blog'];
    return view( 'about', compact('menu') );
});

Route::get('/blog', function () {
    $menu = ['home'=>'Home', 'contact'=>'Contact', 'about'=>'About', 'blog'=>'Blog'];
    return view( 'blog', compact('menu') );
});


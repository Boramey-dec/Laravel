<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::get('/nav',function(){
    return view('navbar.mainnav');
});
Route::get('/home',function(){
    return view('navbar.index');
});
Route::get('/about',function(){
    return view('navbar.about');
});
Route::get('/contact',function(){
    return view('navbar.contact');
});
Route:: resource('products', ProductController::class);


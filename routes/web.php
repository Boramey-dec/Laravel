<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;

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

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return 'This is about page.';
});



//Route::get('/blog',[PostController::class,'index']);

// Route:: resource('blog',PostController::class);

// Route::get('/blog/products',[PostController::class,'index']);

// Route::get('blog/products/about',[PostController::class, 'about']);



Route::get('/user',[UserController::class,'user']);
Route::get('/greeting',function () {
    return view('greeting',['name'=>'James']);
});

Route::get('/products',[ProductsController::class,'index']);

///Route Group
Route::controller(PostController::class)->group(function(){

    Route::get('/blog','index');

    Route::get('blog/about','about');

});

///Route Parameters
//Products/id
Route::get('/products/{id}',[ProductsController::class,'show']);

//Products = all products
//Products/productName
// Route::get('/products/{name}',[ProductsController::class,'show']);

///Pattern is integer
Route::get('/products/index/{id}',
[ProductsController::class,'show'])->where ('id','[0-9]');



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index() {
        $tittle = 'My product blah blahhh';
        $des = "Created by Moana";

        //Compct Method
        //  return view('products.index',
        //  compact('tittle','des'));

        //With Method
        return view('products.index')->with('tittle',$tittle);
    }

    public function show($id){
        ///it returns specific id
        return view ('products.index',['id'=>$id]);
    }

    // public function show($name){
    //    //array
    //     $data = [
    //         'iphone' => 'Iphone',
    //         'samsung'=> 'Samsung'
    //     ];

    //     return view ('products.index',[
    //         'products'=> $data[$name] ?? "Product name ". $name . " does not exist."
    //     ]);
    // }
}

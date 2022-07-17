<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///index method should show all available posts
        //return'Index of blog method';
        //return view('blog.index');
        $name = "Mike";
        $code = "7171";

        //array
        $data = ['product1'=>'Coca',
                 'product2'=> 'Sprite'];

        // return view ('blog.index',[
        //     'name'=> $name,
        //     'code'=> $code,
        //     'data'=> $data
        // ]);
        return view ('blog.index',['data1' => $data['product2'],
            'data'=> $data,
            'name'=> $name,
            'code'=> $code,

        ]);

    }
    public function about(){
        return 'About Us Page';
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Obviously creates a new host
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store value from the http request
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show one post base on the id
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //grab the request and update one specific post
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete one row inside the database based on the given id
    }
}

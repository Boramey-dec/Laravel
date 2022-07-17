<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user(){
        $Uname ="Moana";

        return view ('blog.user',[
            'Uname'=> $Uname
        ]);
    }


}

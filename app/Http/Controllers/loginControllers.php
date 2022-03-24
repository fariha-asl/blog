<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginControllers extends Controller
{
    // data validation
    function getData(Request $req){
        //return "from data will be here" ;
        $req ->validate([
            'username'=>'required | max:25',
            'password'=>'required | min:6'
        ]);
        return $req -> input();
    }
}

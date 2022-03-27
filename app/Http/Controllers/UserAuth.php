<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userlogin(Request $req)
    {
       $data= $req->input();
       $req ->session()->put('user',$data['username']);    //store the data 
       return redirect('profile');     //redirect to profile page



    }
}

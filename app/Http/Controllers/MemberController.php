<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //

    function show()
    {
        //data fetch from database use:
       //$data= Member::all();

       //pagination
       $data= Member::paginate(3);
       return view('list',['members'=>$data]);
        //return view('list');
    }

}

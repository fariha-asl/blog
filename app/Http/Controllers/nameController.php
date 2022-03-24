<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class nameController extends Controller
{
    //

    function index()
    {

       // $data = DB::table('users')->get();
        //return $data;

        return User::all();
       
        //echo "hi";
       
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Http;

class UserController extends Controller
{
    //function loadview($name){
        //return view("users",['name'=>$name]);
        //function loadview(){
           // $data= ['Fariha',"Hossain",'Muna'];
            //return view('users',['user'=> $data]);
     //}

     // HTTP Client code
    function index()
    {
       // return "API data from here";
       $collection= Http::get("https://reqres.in/api/users?page=1");
       return view('item', ['collection'=>$collection['data']]);  //this data from API link


    }        

       
    
}

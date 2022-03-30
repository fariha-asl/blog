<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    //
   function dbOperation()

   {

    //where condition
     //return DB::table('members')
     //->where('address','Dhaka')
     //->get();

     //find and count
     //return DB::table('members')->find(3);
     //return DB::table('members')->count();

     //Insert ,Update,Delete
     /*return DB::table('members')
     ->insert(
           [
              'name'=>'Hossain',
              'email'=>'hossain@gmail.com',
               'address'=>'Dhaka'

           ]

     );
     */

     /*
    return DB::table('members')
    ->where('id',21)
    ->update(
          [
             'name'=>'Tamjid Jamil',
             'email'=>'tamjid@asl.aero',
              'address'=>'Uttara,Dhaka'

          ]

    );
   */
      //return DB::table('members')
      //->where('id',20)->delete();


      //avg,min,max,count
      //return DB::table('members')->max('id');
      //return DB::table('members')->min('name');
      return DB::table('members')->avg('id');
      

   }

}

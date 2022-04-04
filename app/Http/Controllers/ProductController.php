<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Device;
use App\Models\Product;
class ProductController extends Controller
{
    //
   function list()
   {
       //one way to connecxt the db just simpl;y write in Controller 
       //return DB::connection('mysql2')->table('Products')->get();

       //other way to connect with Modal
       //return Device::all();
       return Product::all();



   }

}

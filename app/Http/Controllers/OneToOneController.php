<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class OneToOneController extends Controller
{
    //
   function index()
   {
    //one to one relation in laravel
     return Employee::find(1)->getCompany;


   }

}

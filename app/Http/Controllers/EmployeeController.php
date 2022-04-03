<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
   function show()
   {

        return  DB::table('employees')
        ->join('company','employees.id',"=",'company.employee_id')
        //->select('employees.*')
        //->where('employees.name','Fariha Hossain')
        ->where('company.name',"ASL Systems")
        ->get();
   }

}

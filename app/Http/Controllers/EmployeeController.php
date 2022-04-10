<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\EmployeeImport;
use Excel;
use App\Models\Employee;
class EmployeeController extends Controller
{
    //

    public function importForm()
    {

      $records = Employee::all();

       return view('import-form',compact('records'));


    }

    public function import(Request $request)
    {
        Excel::import(new EmployeeImport,$request->file);
        //return view('import-form');
        return redirect ('/import-form');


    }
    


   //function show()
   //{

        //return  DB::table('employees')
       // ->join('company','employees.id',"=",'company.employee_id')
        //->select('employees.*')
        //->where('employees.name','Fariha Hossain')
        //->where('company.name',"ASL Systems")
       // ->get();
   //}

}

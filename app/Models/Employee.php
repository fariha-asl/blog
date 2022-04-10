<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;
    
    protected $table="employees";

    protected $fillable=['name','email', 'phone','salary','department'];

    public static function getEmployee()
    {
      $records=DB::table('employees')->select('id','name','email','phone','salary','department');
      return $records;
    }

    //one to one relation
  // public function getCompany()
//{
   // return $this->hasOne('App\Models\Company');


//}
 //public function getDevice()
 //{
    //return $this->hasMany('App\Models\device');



  //}
 



}

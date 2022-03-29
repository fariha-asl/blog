<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // for fetch data from database this model has no code to write. And also for delete
    use HasFactory;
    
    //in database save data we need updaded and created at but we already create so that's way avoid this issue use
      //public $timestamps=false;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // if the DB name and Model name are same.For example DB name employee and modal name employee just Public the DB name.
    // public $table="employee";
}

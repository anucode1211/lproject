<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'name', 'email','employeeid','age','gender','mobile','address','state','joiningdate','adharno' ];

     protected $dates = [ 'deleted_at' ];
     
}

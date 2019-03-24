<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
        'name','username','address','phone','nationality', 'email', 'password','userTypeId',
    ];

     
}

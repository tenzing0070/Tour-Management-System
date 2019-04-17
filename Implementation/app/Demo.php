<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    protected $fillable=[
    	
    	'PackageName','detail','cost','hotel',
    	'bookdate','duration','nop',	
    ];
}

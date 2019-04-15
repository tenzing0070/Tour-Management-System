<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    protected $fillable=[
    	// 'name','education','age',
    	'PackageName','detail','cost','hotel',
    	'bookdate','duration','nop',	
    ];
}

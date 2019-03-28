<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table="demos";
    protected $fillable=['userId','PackId','bookdate','from_date','to_date','nop', 'program_name','detail','price','hotel',];
}

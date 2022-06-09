<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reschedule extends Model
{
    //
    protected $table ='reschedule';
   
    protected $fillable = ['firstName','surname','email','reschedule_reason'];
}

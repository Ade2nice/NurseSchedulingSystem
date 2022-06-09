<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class RegisterNurse extends Model
{
    //
    protected $table ='nurse_list';
   
    protected $fillable = ['phone','address','firstName','surname','gender','email','password'];
    

}

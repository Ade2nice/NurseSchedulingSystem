<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NurseSchedule extends Model
{
    //
    protected $table='nurse_list';
    protected $fillable= [
        'monday', 'tuesday', 'wednesday','thursday','friday','saturday','sunday',
    ];
}

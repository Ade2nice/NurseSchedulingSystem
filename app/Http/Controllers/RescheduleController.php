<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Reschedule;

class RescheduleController extends Controller
{
    //
    public function __construct()
    {
     $this->middleware('auth:nurse');
}

    public function reschedule(){
        request()-> validate([
            'reschedule_reason'=> 'required',
            'email'=> 'required',
            'surname'=>'required',
            'firstName'=>'required',
        ]);

    $reschedule=new Reschedule();
    $reschedule->email = request('email');
    $reschedule->reschedule_reason= request('reschedule_reason');
    $reschedule->surname= request('surname');
    $reschedule->firstName= request('firstName');
    $reschedule->save();
    return redirect('/nurse/schedule/')->with('mssg','You have successfully applied for reschedule');
}

}

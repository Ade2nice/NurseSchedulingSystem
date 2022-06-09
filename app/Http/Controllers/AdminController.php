<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterNurse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Reschedule;
class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $nurseList = RegisterNurse::all();
        return view ('admin.dashboard',['nurseList'=>$nurseList]);
    }
    public function nurseTable(){
        $list = RegisterNurse::all();
        return view ('admin.nurseTable',['list'=>$list]);
    }

public function addNurse(){
    return view ('admin.addNurse');
}

public function addNurseForm(Request $request){
        request()-> validate([
        'firstName'=> 'required',
        'surname'=> 'required',
        'email'=> 'required',
        'address'=> 'required',
        'phone'=> 'required|max:11|min:11',
        'gender'=> 'required',
        'password'=> 'required',
        ]);
        $form = new RegisterNurse();
        $form->firstName= request('firstName');
        $form->surname= request('surname');
        $form->email= request('email');
        $form->phone= request('phone');
        $form->address= request('address');
        $form->gender= request('gender');
        $form->password= Hash::make(request('password'));
        $form->save();
    //return request('gender');
        return redirect('/addNurse')->with('status', 'You have successfully added a Nurse');
}

public function schedule(){
 $schedule = DB::table('nurse_list')->whereNotNull(['monday','tuesday','wednesday','thursday','friday','saturday','sunday'])->get();
 //$schedule= RegisterNurse::all();
    return view ('admin.schedule', ['schedule'=>$schedule]);
}

public function scheduleNurse($id){
    request()-> validate([
        'monday'=> 'required',
        'tuesday'=> 'required',
        'wednesday'=> 'required',
        'thursday'=> 'required',
        'friday'=> 'required',
        'saturday'=> 'required',
        'sunday'=> 'required',]);
    $users =RegisterNurse::find($id);
    $users->monday= request('monday');
    $users->tuesday= request('tuesday');
    $users->wednesday= request('wednesday');
    $users->thursday= request('thursday');
    $users->friday= request('friday');
    $users->saturday= request('saturday');
    $users->sunday= request('sunday');
    $users->update();
    return redirect('/dashboard')->with('mssg','You have successfully scheduled nurse');

}
public function schedulerole($id){

    $nurseList=RegisterNurse::findOrFail($id);
   // $select=RegisterNurse::first()->role_id;
return view('admin.dashboard-schedule',['nurseList'=>$nurseList]);
}
public function deletedreschedule($id){
    $lists = Reschedule::find($id);
    $lists->delete();
    return redirect ('/reschedule')->with('mssg','You have successfully deleted application');
}

public function reschedule()
{
    $list = Reschedule::all();
    return view ('admin.reschedule',['list'=>$list]);
}
public function deletereschedule($id){

    $list= Reschedule::findOrFail($id);
   // $select=RegisterNurse::first()->role_id;
return view('admin.reschedule-delete',['list'=>$list]);
}
}
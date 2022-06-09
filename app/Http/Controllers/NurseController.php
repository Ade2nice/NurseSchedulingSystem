<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\RegisterNurse;

class NurseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  public function __construct()
    {
     $this->middleware('auth:nurse');
}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $random = DB::table('nurse_list')->where('id', '!=', auth()->id())->inRandomOrder()->take(3)->get();
        return view('nurse.home',  ['random'=>$random]);
    }

    public function profile()
    {
        return view('nurse.profile');
    }
    public function schedule()
    {
        
        return view('nurse.schedule' );
    }
    

   
}

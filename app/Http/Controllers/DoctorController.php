<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function doctor()
    {
        $exist=DB::table('users')->where('id',Auth::user()->id)->where('state',1)->count();
        if($exist != 0){
            return view('doctor');
        }
        return view('welcome');
    }
}

<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $exist=DB::table('users')->where('id',Auth::user()->id)->where('state',1)->count();
        if($exist != 0){
            return view('admin.profile');
        }
        return view('admin.register');
        
    }
}

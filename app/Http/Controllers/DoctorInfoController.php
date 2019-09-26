<?php

namespace App\Http\Controllers;

use App\doctor_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;
use Session;

class DoctorInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'salutation' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'mobile' => 'required|numeric',
            'age' => 'required',
            'nic' => 'required',
            'date_of_birth' => 'required',
            'working_hospital'=>'required',
            'register_num' => 'required',
            
            // 'mobile' => 'required|numeric|between:1,9',
        ]);
         
        if ($validator->fails()) {
             Session::flash('error', $validator->messages()->first());
             return redirect()->back()->withInput();
        }
        $request->merge(['user_id' => Auth::user()->id]);
        $exist=DB::table('doctor_infos')->where('user_id',$request->user_id)->count();
        if( $exist == 0){
            doctor_info::doctorinfo();
            DB::table('users')->where('id',Auth::user()->id)->update(['state'=>1]);
        }
        return view('/doctor/profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\doctor_info  $doctor_info
     * @return \Illuminate\Http\Response
     */
    public function show(doctor_info $doctor_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\doctor_info  $doctor_info
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor_info $doctor_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\doctor_info  $doctor_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doctor_info $doctor_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doctor_info  $doctor_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctor_info $doctor_info)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\patients_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;
use Session;

class PatientsInfoController extends Controller
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
            
            // 'mobile' => 'required|numeric|between:1,9',
        ]);
         
        if ($validator->fails()) {
             Session::flash('error', $validator->messages()->first());
             return redirect()->back()->withInput();
        }
        $request->merge(['user_id' => Auth::user()->id]);
        $exist=DB::table('patients_infos')->where('user_id',$request->user_id)->count();
        if( $exist == 0){
            patients_info::patientinfo();
            DB::table('users')->where('id',Auth::user()->id)->update(['state'=>1]);
        }
        return view('/patient/profile');

     

    }
    public function manage()
    {
        $patientname = array(
            'patient' =>  DB::table('patients_infos')->get()
        );

        return view('welcome', $patientname);
    }
    function autocomplete()
    {
     return view('welcome');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('patients_infos')
        ->where('f_name', 'LIKE', "%{$query}%")
        ->get();
      $output = '';
      foreach($data as $row)
      {
       $output .= '
       <p class="mb-0" style="width:100%;background:gray;color:white;">'.$row->f_name.'</p>
       ';
      }
      $output .= '';
      echo $output;
     }
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
     * @param  \App\patients_info  $patients_info
     * @return \Illuminate\Http\Response
     */
    public function show(patients_info $patients_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\patients_info  $patients_info
     * @return \Illuminate\Http\Response
     */
    public function edit(patients_info $patients_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\patients_info  $patients_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, patients_info $patients_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\patients_info  $patients_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(patients_info $patients_info)
    {
        //
    }
}

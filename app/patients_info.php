<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class patients_info extends Model
{
    public static function patientinfo(){

        $request = Request();
        $add= new patients_info();
        $add->salute=$request->salutation;
        $add->f_name=$request->first_name;
        $add->l_name=$request->last_name;
        $add->address=$request->address;
        $add->phone=$request->mobile;
        $add->age=$request->age;
        $add->nic=$request->nic;
        $add->user_id=$request->user_id;
        $add->patient_id=self::ptnrandomid();
        $add->save();
    }

    public static function ptnrandomid(){
        $rand=mt_rand(10000, 999999);
        $count=DB::table('patients_infos')->where('patient_id',$rand)->count();
        if($count == 0)
        return $rand;
        else
        return self::ptnrandomid();
    }
}

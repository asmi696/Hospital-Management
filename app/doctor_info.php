<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class doctor_info extends Model
{
    public static function doctorinfo(){

        $request = Request();
        $add= new doctor_info();
        $add->salute=$request->salutation;
        $add->f_name=$request->first_name;
        $add->l_name=$request->last_name;
        $add->address=$request->address;
        $add->phone=$request->mobile;
        $add->age=$request->age;
        $add->nic=$request->nic;
        $add->working_hospital =$request->working_hospital;
        $add->register_num =$request->register_num;
        $add->user_id=$request->user_id;
        $add->doctor_id=self::ptnrandomid();
        $add->save();
    }

    public static function ptnrandomid(){
        $rand=mt_rand(10000, 999999);
        $count=DB::table('doctor_infos')->where('doctor_id',$rand)->count();
        if($count == 0)
        return $rand;
        else
        return self::ptnrandomid();
    }
}

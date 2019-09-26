<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminRegister extends Model
{
    public static function patientinfo(){

        $request = Request();
        $add= new Patient();
        $add->salute=$request->salutation;
        $add->f_name=$request->first_name;
        $add->l_name=$request->last_name;
        $add->address=$request->address;
        $add->phone=$request->mobile;
        $add->age=$request->age;
        $add->nic=$request->nic;
        $add->country=$request->country;
        $add->date_of_birth=$request->date_of_birth;
        $add->user_id=$request->user_id;
        $add->patient_id=self::ptnrandomid();
        $add->save();
    }
}

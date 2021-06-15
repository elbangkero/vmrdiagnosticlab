<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PatientController extends Controller
{
    public function patient_result($id)
    {
        $show_result = DB::table('covid_info')
        ->where('id',$id)
        ->get();

        $exists = DB::table('covid_info')
        ->where('id',$id)
        ->first();
        
        return view('patient.index',compact('show_result','exists'));
    }
}

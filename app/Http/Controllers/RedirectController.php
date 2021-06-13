<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\DB;


class RedirectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_index()
    { 
      $patient_list = DB::table('covid_info')
        ->where('is_delete','!=','1')
        ->orderBy('id','ASC')
        ->get();

        return view('admin.index',compact('patient_list'));
    }
    public function add_patient()
    {
        return view('admin.add_patient');
    }
    public function insert_patient(Request $request)
    {
        $patient = new Patient();
        $patient->name = $request->input('name'); 
        $patient->age = $request->input('age'); 
        $patient->gender = $request->input('gender');
        $patient->birthday = $request->input('birthday');
        $patient->address = $request->input('address');
        $patient->patient_id = $request->input('patient_id');
        $patient->specimen_no = $request->input('specimen_no');
        $patient->test_result = $request->input('test_result');
        $patient->date_requested = $request->input('date_requested');
        $patient->date_received = $request->input('date_received');
        $patient->date_collection = $request->input('date_collection');
        $patient->specimen_type = $request->input('specimen_type');
        $patient->test_perform = $request->input('test_perform');
        $patient->remarks = $request->input('remarks');
        $patient->is_delete = '0';
        $patient->save();
        return back()->with('success', 'Your Data has been Inserted');
    }
}

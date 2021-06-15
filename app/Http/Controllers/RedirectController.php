<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class RedirectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_index()
    {
        $patient_list = DB::table('covid_info')
            ->where('is_delete', '!=', '1')
            ->orderBy('id', 'ASC')
            ->get();
        $patient_count = DB::table('covid_info')
            ->where('is_delete', '!=', '1')
            ->orderBy('id', 'ASC')
            ->count();

        return view('admin.index', compact('patient_list', 'patient_count'));
    }
    public function add_patient()
    {

        $status = "add";
        return view('admin.mng_patient', compact('status'));
    }
    public function insert_patient(Request $request)
    {
        $prefix_img = Str::random(10);
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
        $patient->date_release = $request->input('date_release');
        $patient->specimen_type = $request->input('specimen_type');
        $patient->test_perform = $request->input('test_perform');
        $patient->remarks = $request->input('remarks');
        $patient->is_delete = '0';
        $patient->qr_code = '/public/images/qrcodes/' . $prefix_img . '_' . $request->input('name') . '.jpg';
        $patient->save();
        $id = $patient->id;
        $url = 'https://chart.googleapis.com/chart?cht=qr&chs=450x450&chl=https://vmrdiagnosticlab.com/admin/patient-result/' . $id . '';
        $img = 'public/images/qrcodes/' . $prefix_img . '_' . $request->input('name') . '.jpg';
        file_put_contents($img, file_get_contents($url));
        return back()->with('success', 'Your Data has been Inserted');
    }
    public function delete_patient(Request $request, $id)
    { 
        DB::table('covid_info')->where('id', '=', $id)->delete();
        return back()->with('delete', 'Your Data has been Deleted');
    }
    public function edit_patient(Request $request, $id)
    {
        $edit_patient = DB::table('covid_info')
            ->where('id', $id)
            ->get();

        $status = "edit";

        return view('admin.mng_patient', compact('status', 'edit_patient'));
    }
    public function update_patient(Request $request, $id)
    {
        $update = [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'birthday' => $request->input('birthday'),
            'address' => $request->input('address'),
            'patient_id' => $request->input('patient_id'),
            'specimen_no' => $request->input('specimen_no'),
            'test_result' => $request->input('test_result'),
            'date_requested' => $request->input('date_requested'),
            'date_requested' => $request->input('date_requested'),
            'date_received' => $request->input('date_received'),
            'date_collection' => $request->input('date_collection'),
            'date_release' => $request->input('date_release'),
            'specimen_type' => $request->input('specimen_type'),
            'test_perform' => $request->input('test_perform'),
            'remarks' => $request->input('remarks'),
        ];


        DB::table('covid_info')
            ->where('id', $id)
            ->update($update);

        return back()->with('success', 'Your Data has been Update');
    }
    public function add_admin()
    {
        $status = "add";
        return view('admin.mng_admin', compact('status'));
    }
    public function mng_admin()
    {
        $user_list = DB::table('users')
            ->where('is_delete', '!=', '1')
            ->orderBy('id', 'ASC')
            ->get();
        $status = "mng";
        return view('admin.mng_admin', compact('status', 'user_list'));
    }
    public function insert_admin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request['password']);
        $user->remember_token = $request->input('password');
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->updated_at = Carbon::now()->toDateTimeString();
        $user->is_delete = '0';
        $user->save();
        return back()->with('success', 'Your Data has been Inserted');
    }
    public function delete_admin(Request $request, $id)
    {

        DB::table('users')->where('id', '=', $id)->delete();
        return back()->with('delete', 'Your Data has been Deleted');
    }
    public function edit_admin(Request $request, $id)
    { 
        $edit_user = DB::table('users')
        ->where('id', $id) 
        ->get();
        $status = "edit";
        return view('admin.mng_admin', compact('status','edit_user'));
    }
    public function update_admin(Request $request, $id)
    {
      

        $this->validate($request, [
            'name' => 'required', 
            'email' => 'required|unique:users,email,'.$id.'',
            'password' => 'confirmed', 
        ]);

        $pass = $request->input('password');
        if(!empty($pass)){
            $update = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' =>  Hash::make($request['password']), 
                'remember_token' => $request->input('password'), 
                'updated_at' => Carbon::now()->toDateTimeString(),
            ];
    
        }else{
            $update = [
                'name' => $request->input('name'),
                'email' => $request->input('email'), 
                'updated_at' => Carbon::now()->toDateTimeString(),
            ];
        }
    

        DB::table('users')
            ->where('id', $id)
            ->update($update);

        return back()->with('success', 'Your Data has been Update');
    }
    
}


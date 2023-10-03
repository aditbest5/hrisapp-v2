<?php

namespace App\Http\Controllers;

use App\District;
use App\Employee;
use App\JobTitle;
use App\Province;
use App\Regency;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $sessions = $request->session()->get('employee.form1');
        $jobTitles = JobTitle::all();
        return view('EmployeePages.addList', compact('jobTitles', 'sessions'));
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
    public function form1(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'employee_code' => 'required',
            'id_card' => 'required',
            'id_family' => 'required',
            'email' => 'required',
        ]);
        $request->session()->put('employee.form1', $request->all());
        return redirect()->route('employee.step2');
    }
    public function step2(Request $request)
    {
        $districts = District::all();
        $regencies = Regency::all();
        $provinces = Province::all();
        $sessions = $request->session()->get('employee.form2');
        return view('EmployeePages.addList2', compact('districts', 'regencies', 'provinces', 'sessions'));
    }
    public function form2(Request $request)
    {
        // $request->validate([
        //     'address' => 'required',
        //     'phone' => 'required',
        //     'postal_code' => 'required',
        //     'emergency_phone' => 'required',
        //     'emergency_name' => 'required',
        // ]);
        $request->session()->put('employee.form2', $request->all());

        return redirect()->route('employee.step3');
    }
    public function form3(Request $request)
    {
        // $request->validate([
        //     'address' => 'required',
        //     'phone' => 'required',
        //     'postal_code' => 'required',
        //     'emergency_phone' => 'required',
        //     'emergency_name' => 'required',
        // ]);
        $id_user = auth()->user()->id;
        $step1Data = $request->session()->get('employee.form1');
        $step2Data = $request->session()->get('employee.form2');
        Employee::create([
            'nama' => $step1Data['first_name'] . ' ' . $step1Data['last_name'],
            'kode' => $step1Data['employee_code'],
            'id_jobtitle' => $step1Data['job_title'],
            'nik' => $step1Data['id_card'],
            'kk' => $step1Data['id_family'],
            'email' => $step1Data['email'],
            'tgl_lahir' => $step1Data['birth_date'],
            'alamat' => $step2Data['address'],
            'id_kelurahan' => $step2Data['district'],
            'id_kecamatan' => $step2Data['city'],
            'id_provinsi' => $step2Data['province'],
            'hp' => $step2Data['phone'],
            'kode_pos' => $step2Data['postal_code'],
            'hp_darurat' => $step2Data['emergency_contact'],
            'kontak_darurat' => $step2Data['emergency_name'],
            'tgl_kontrak' => $request->join_date,
            'pendidikan' => $request->study,
            'status_karyawan' => $request->status,
            'status_nikah' => $request->marriage_status,
            'akun_bank' => $request->account_bank,
            'akun_no' => $request->account_number,
            'gaji' => $request->salary,
            'id_user' => $id_user
        ]);
        return redirect()->route('list-employee');
    }
    public function step3(Request $request)
    {
        $sessions = $request->session()->get('employee.form2');

        return view('EmployeePages.addList3', compact('sessions'));
    }

    public function previousStep1(Request $request)
    {
        return redirect()->route('add-employee');
    }
    public function previousStep2(Request $request)
    {
        return redirect()->route('add-employee2');
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $employees = Employee::findorFail($id);
        list($first_name, $last_name) = explode(' ',  $employees->nama);
        $sessions = $request->session()->get('employee.editForm1');
        $jobTitles = JobTitle::all();

        return view('EmployeePages.editEmployee', compact('employees', 'sessions', 'first_name', 'last_name', 'jobTitles'));
    }

    public function editStep2(Request $request, $id)
    {
        $districts = District::all();
        $regencies = Regency::all();
        $provinces = Province::all();
        $employees = Employee::findorFail($id);
        $sessions = $request->session()->get('employee.editForm2');
        return view('EmployeePages.editEmployee2', compact('districts', 'regencies', 'provinces', 'sessions', 'employees'));
    }
    public function editForm1(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'employee_code' => 'required',
            'id_card' => 'required',
            'id_family' => 'required',
            'email' => 'required',
        ]);
        $request->session()->put('employee.editForm1', $request->all());
        $employee = Employee::where('kode', $request->employee_code)->first();
        $id = $employee->id;
        return redirect()->route('edit-employee2', ['id' => $id]);
    }


    public function editForm2(Request $request)
    {
        // $request->validate([
        //     'address' => 'required',
        //     'phone' => 'required',
        //     'postal_code' => 'required',
        //     'emergency_phone' => 'required',
        //     'emergency_name' => 'required',
        // ]);
        $employees = $request->session()->get('employee.editForm1');
        $kode = $employees['employee_code'];
        $employee = Employee::where('kode', $kode)->first();
        $id = $employee->id;

        $request->session()->put('employee.editForm2', $request->all());

        return redirect()->route('edit-employee3', ['id' => $id]);
    }

    public function editStep3(Request $request)
    {
        $sessions = $request->session()->get('employee.editForm2');

        return view('EmployeePages.editEmployee3', compact('sessions'));
    }

    public function previousEdit1($id)
    {
        return redirect()->route('edit-employee', ['id' => $id]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Employee::destroy($id);
        return back();
    }
}

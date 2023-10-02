<?php

namespace App\Http\Controllers;

use App\Department;
use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    //
    public function index()
    {
        $departments = Department::all();
        return view('DataPages.addDivision', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'division_code' => 'required',
            'division_name' => 'required',
            'description' => 'required',
        ]);
        $status = $request->status;
        if ($status) {
            $status = 1;
        } else {
            $status = 0;
        }
        // echo $status;
        $id = auth()->user()->id;
        Division::create([
            'id_department' => $request->department_code,
            'kode' => $request->division_code,
            'nama' => $request->division_name,
            'keterangan' => $request->description,
            'status' => $status,
            'id_user' => $id,
        ]);
        return redirect('/division')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id)
    {
        $departments = Department::all();
        $divisions = Division::findorFail($id);
        return view('DataPages.editDivision', compact('divisions', 'departments'));
    }

    public function update(Request $request, $id)
    {
        //     $request->validate([
        //         'department_code' => 'required',
        //         'division_code' => 'required',
        //         'division_name' => 'required',
        //         'description' => 'required',
        //     ]);
        $id_user = auth()->user()->id;

        $status = $request->status;
        if ($status) {
            $status = 1;
        } else {
            $status = 0;
        }
        Division::findorFail($id)->update([
            "id_department" => $request->department_code,
            "kode" => $request->division_code,
            "nama" => $request->division_name,
            "keterangan" => $request->description,
            "status" => $status,
            "id_user" => $id_user
        ]);
        return redirect()->route('division')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        Division::destroy($id);
        return back();
    }
}

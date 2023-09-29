<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('DataPages.addDepartment');
    }
    //Create Department Data
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'status' => 'required'
        ]);
        $id = auth()->user()->id;
        $status = $request->status;
        if ($status) {
            $status = 1;
        } else {
            $status = 0;
        }
        Department::create([
            "kode" => $request->code,
            "nama" => $request->name,
            "keterangan" => $request->desc,
            "status" => $status,
            "id_user" => $id
        ]);
        return redirect()->route('department')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        $departments = Department::findorFail($id);
        return view('DataPages.editDepartment', compact('departments'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'status' => 'required'
        ]);
        $status = $request->status;
        if ($status) {
            $status = 1;
        } else {
            $status = 0;
        }
        Department::findorFail($id)->update([
            "kode" => $request->code,
            "nama" => $request->name,
            "keterangan" => $request->desc,
            "status" => $status,
            "id_user" => $id
        ]);
        return redirect()->route('department')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id)
    {
        Department::destroy($id);
        return back();
    }
}

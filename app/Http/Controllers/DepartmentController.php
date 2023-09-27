<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    //Create Department Data
    public function store(Request $request)
    {
        $id = auth()->user()->id;
        Department::create([
            "kode" => $request->code,
            "nama" => $request->name,
            "keterangan" => $request->desc,
            "status" => $request->status,
            "id_user" => $id
        ]);
        return redirect()->route('department')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        $departments = Department::find($id);
        print_r($departments);
        return view('DataPages.editDepartment', compact('departments'));
    }
}

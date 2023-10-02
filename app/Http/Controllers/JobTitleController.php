<?php

namespace App\Http\Controllers;

use App\Division;
use App\JobTitle;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    //
    public function index()
    {
        $divisions = Division::all();
        return view('DataPages.addJobTitle', compact('divisions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_code' => 'required',
            'job_name' => 'required',
            'description' => 'required'
        ]);
        $id = auth()->user()->id;
        $status = $request->status;
        if ($status) {
            $status = 1;
        } else {
            $status = 0;
        }
        JobTitle::create([
            'id_division' => $request->division_code,
            'kode' => $request->job_code,
            'nama' => $request->job_name,
            'keterangan' => $request->description,
            'status' => $status,
            'id_user' => $id
        ]);
        return redirect()->route('job-title')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id)
    {
        $jobTitles = JobTitle::findorFail($id);
        $divisions  = Division::all();
        return view('DataPages.editJobTitle', compact('jobTitles', 'divisions'));
    }
    public function update(Request $request, $id)
    {
        $id_user = auth()->user()->id;
        $status = $request->status;
        if ($status) {
            $status = 1;
        } else {
            $status = 0;
        }
        JobTitle::findorFail($id)->update([
            'id_division' => $request->division_code,
            'kode' => $request->job_code,
            'nama' => $request->job_name,
            'keterangan' => $request->description,
            'status' => $status,
            'id_user' => $id_user
        ]);
        return redirect()->route('job-title')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id)
    {
        JobTitle::destroy($id);
        return back();
    }
}

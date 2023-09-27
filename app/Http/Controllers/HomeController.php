<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function department()
    {
        $departments = Department::all();
        return view('DataPages.department', compact('departments'));
    }
    public function division()
    {
        return view('DataPages/division');
    }
    public function jobTitle()
    {
        return view('DataPages/jobTitle');
    }
    public function status()
    {
        return view('DataPages/status');
    }
    public function allowance()
    {
        return view('DataPages/allowance');
    }
    public function leaveForm()
    {
        return view('DataPages/leaveForm');
    }
}

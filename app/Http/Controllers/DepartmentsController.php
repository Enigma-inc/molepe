<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentsController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $departments = Department::latest()->paginate(10);

        return view('assets.accountability.departments.index')
               ->with('departments', $departments);
    }

    public function store(Request $request){
        Department::create([
            'name' => request('name')
        ]);

        return redirect()->route('department.list');
    }

    public function update(Request $request, $id){
        $department = Department::find($id);

        $department->name = $request->input('name');
        $department->save();

        return redirect()->route('department.list');
    }

    public function destroy($id)
    {
        $deletedDepartment = Department::find($id)->delete();
        
        return redirect()->route('department.list'); 
    }
}

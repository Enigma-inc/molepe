<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Http\Requests\AccountabilityDepartmentRequest;

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

    public function store(AccountabilityDepartmentRequest $request){
        Department::create([
            'name' => request('name')
        ]);

        return redirect()->route('department.list');
    }

    public function edit($id){
        $department = Department::find($id);

        if(!empty($department->toArray())){
            return view('assets.accountability.departments.edit')
                   ->with('department', $department);
        }else{
            return redirect()->route('department.list'); 
        }
    }

    public function update(AccountabilityDepartmentRequest $request, Department $department){

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

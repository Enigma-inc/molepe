<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssetAccountability;
use App\Custodian;
use App\Department;
use App\Section;
use App\CostCenter;

class AssetsAccountabilityController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $assets = AssetAccountability::latest()->paginate(15);

        return view('assets.accountability.index')->with('assets', $assets);
    }

    public function create(){
        $custodians = Custodian::all();
        $departments = Department::all();
        $sections = Section::all();
        $costCenters = CostCenter::all();

        return view('assets.accountability.create')
               ->with(['custodians' => $custodians,
                       'departments' => $departments,
                       'sections' => $sections,
                       'costCenters' => $costCenters
                     ]);
    }

    public function store(Request $request){
        AssetAccountability::create([
            'custodian_id' => request('custodian'),
            'department_id' => request('department'),
            'section_id' => request('section'),
            'cost_center_id' => request('cost-center'),
        ]);

        return redirect()->route('accountability.list');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssetAccountability;
use App\Custodian;
use App\Department;
use App\Section;
use App\CostCenter;
use App\Asset;
use App\Http\Requests\AssetAccountabilityRequest;
use DB;

class AssetsAccountabilityController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $assets = AssetAccountability::latest()
                ->paginate(15);

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

    public function store(AssetAccountabilityRequest $request){
        $accountability = AssetAccountability::create([
            'restrictions' => request('restrictions'),
            'custodian_id' => request('custodian'),
            'department_id' => request('department'),
            'section_id' => request('section'),
            'cost_center_id' => request('costCenter'),
        ]);

        return redirect()->route('asset.accountability');
    }

    public function showAssetAccountability($id){
        $asset = Asset::find($id);

        $assetAccountability = DB::table('asset_accountabilities')
                                ->select( 
                                        'asset_accountabilities.restrictions',
                                        'asset_accountabilities.id',
                                        'departments.name as department_name',
                                        'departments.id as department_id',
                                        'cost_centers.name as cost_center_name',
                                        'cost_centers.id as cost_center_id',
                                        'sections.name as section_name',
                                        'sections.id as section_id',
                                        'custodians.name as custodian_name',
                                        'custodians.last_name as custodian_last_name',
                                        'custodians.email as custodian_email',
                                        'custodians.phone as custodian_phone',
                                        'custodians.id as custodian_id'
                                        )
                                ->leftJoin('departments','departments.id','asset_accountabilities.department_id')
                                ->leftJoin('cost_centers','cost_centers.id','asset_accountabilities.cost_center_id')
                                ->leftJoin('sections','sections.id','asset_accountabilities.section_id')
                                ->leftJoin('custodians','custodians.id','asset_accountabilities.custodian_id')
                                ->where('asset_accountabilities.id','=',$asset->asset_accountability_id)
                                ->get();

        return view('assets.accountability.show')
               ->with([
                        'asset' => $asset,
                        'assetAccountability' => $assetAccountability,
                      ]);
    }

    public function edit($id){
        $accountability = AssetAccountability::find($id);

        $selectedCustodian = Custodian::find($accountability->custodian_id);
        $selectedDepartment = Department::find($accountability->department_id);
        $selectedSection = Section::find($accountability->section_id);
        dd($selectedDepartment);        
        $selectedCostCenter = CostCenter::find($accountability->cost_center_id);

        $custodians = Custodian::all();        
        $departments = Department::all();
        $sections = Section::all();
        $costCenters = CostCenter::all();
        return view('assets.accountability.edit')
                ->with([
                        'accountability' => $accountability,
                        'custodian' => $custodians,
                        'department' => $departments,
                        'section' => $sections,
                        'costCenter' => $costCenters,
                        'selectedCustodian' => $selectedCustodian,
                        'selectedDepartment' => $selectedDepartment,
                        'selectedSection' => $selectedSection,
                        'selectedCostCenter' => $selectedCostCenter
                       ]);
    }

    public function update(AssetAccountabilityRequest $request, AssetAccountability $accountability){
        $accountability;
    }
}

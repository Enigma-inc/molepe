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
use Input;

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

    public function store(AssetAccountabilityRequest $request, $id){

        $asset = Asset::find($id);

        $accountability = AssetAccountability::create([
            'restrictions' => request('restrictions'),
            'custodian_id' => request('custodian'),
            'department_id' => request('department'),
            'section_id' => request('section'),
            'cost_center_id' => request('costCenter'),
            'asset_id' => $asset->id
        ]);

        return redirect()->route('asset.list');
    }

    public function showAssetAccountability($id){
        $asset = Asset::find($id);

        $assetAccountability = DB::table('asset_accountabilities')
                                ->select('asset_accountabilities.restrictions',
                                         'asset_accountabilities.id',
                                         'asset_accountabilities.asset_id',
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
                                         'custodians.id as custodian_id')
                                ->join('departments','departments.id','asset_accountabilities.department_id')
                                ->join('cost_centers','cost_centers.id','asset_accountabilities.cost_center_id')
                                ->join('sections','sections.id','asset_accountabilities.section_id')
                                ->join('custodians','custodians.id','asset_accountabilities.custodian_id')
                                ->join('assets','assets.id','asset_accountabilities.asset_id')
                                ->where('asset_accountabilities.asset_id','=',$asset->id)
                                ->get();
                                
        return view('assets.accountability.show')
               ->with([
                      'asset' => $asset,
                      'assetAccountability' => $assetAccountability,
                     ]);
    }

    public function edit($id){
        $accountability = AssetAccountability::find($id);        

        $selectedDepartment = Department::find($accountability->department_id);
        $selectedSection = Section::find($accountability->section_id);
        $selectedCostCenter = CostCenter::find($accountability->cost_center_id);
        $selectedCustodian = Custodian::find($accountability->custodian_id);
        
        $custodians = Custodian::all();        
        $departments = Department::all();
        $sections = Section::all();
        $costCenters = CostCenter::all();
        if(!empty($accountability->toArray())){
            return view('assets.accountability.edit')
                    ->with([
                            'accountability' => $accountability,
                            'custodians' => $custodians,
                            'departments' => $departments,
                            'sections' => $sections,
                            'costCenters' => $costCenters,
                            'selectedCustodian' => $selectedCustodian,
                            'selectedDepartment' => $selectedDepartment,
                            'selectedSection' => $selectedSection,
                            'selectedCostCenter' => $selectedCostCenter,
                        ]);
        }else{
            return redirect()->route('asset.list');
        }
    }

    public function update(AssetAccountabilityRequest $request, AssetAccountability $accountability){
        
        $accountability->restrictions = $request->input('restrictions');
        $accountability->custodian_id = $request->input('custodian');
        $accountability->department_id = $request->input('department');        
        $accountability->cost_center_id = $request->input('costCenter');
        $accountability->section_id = $request->input('section');
        $accountability->save();

        return redirect()->route('asset.list');
    }

    public function destroyCostCenter($id){

        $accountability = AssetAccountability::find($id);

        $update = DB::table('asset_accountabilities')->where('asset_accountabilities.id', '=', $accountability->cost_center_id)
                    ->update(
                        array(
                            $accountability->cost_center_id => Input::has('costCenter') ? Input::get('costCenter') : null,
                        )
                    );

        return redirect()->route('asset.list'); 
    }
}

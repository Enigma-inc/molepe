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

        $assetAccountability = AssetAccountability::with(['costCenter', 
                                                          'section', 
                                                          'department', 
                                                          'custodian'
                                                          ])
                                                    ->where('asset_id', $asset->id)
                                                    ->first();
                                
        return view('assets.accountability.show')
               ->with([
                      'asset' => $asset,
                      'assetAccountability' => $assetAccountability
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

        $asset = Asset::find($id);

        $update = DB::table('asset_accountabilities')
                    ->where('asset_id', '=', $asset->id)
                    ->update(['cost_center_id' => NULL]);

        return redirect()->route('asset.list'); 
    }

    public function destroySection($id){
        
        $asset = Asset::find($id);

        $update = DB::table('asset_accountabilities')
                    ->where('asset_id', '=', $asset->id)
                    ->update(['section_id' => NULL]);

        return redirect()->route('asset.list'); 
    }

    public function destroyDepartment($id){
        
        $asset = Asset::find($id);

        $update = DB::table('asset_accountabilities')
                    ->where('asset_id', '=', $asset->id)
                    ->update(['department_id' => NULL]);

        return redirect()->route('asset.list'); 
    }

    public function destroyCustodian($id){
        
        $asset = Asset::find($id);

        $update = DB::table('asset_accountabilities')
                    ->where('asset_id', '=', $asset->id)
                    ->update(['custodian_id' => NULL]);

        return redirect()->route('asset.list'); 
    }
}

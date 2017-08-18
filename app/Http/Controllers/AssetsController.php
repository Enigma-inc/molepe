<?php

namespace App\Http\Controllers;
use App\Asset;
use App\Zone;
use App\AssetSubclass;
use App\Location;
use App\Coordinates;
use App\AssetClass;
use App\AssetGroup;
use App\Http\Requests\AssetRequest;
use App\Http\Requests\EditAssetIdentificationRequest;
use App\Http\Requests\EditAssetNumberRequest;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    //

    function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $assets = Asset::latest()->paginate(15);

        return view('assets.index')
               ->with(['assets' => $assets]);
    }

    public function create()
    {
        $parentAssets=Asset::all();
        $assetZones=Zone::all();
        $assetSubclasses=AssetSubclass::all();
        $assetLocations=Location::all();
        $assetGroups=AssetGroup::all();

        return view('assets.create')->with(['parentAssets' =>$parentAssets, 
                                            'assetZones'=>$assetZones, 
                                            'assetSubclasses'=>$assetSubclasses,
                                            'assetLocations' => $assetLocations,
                                            'assetGroups' => $assetGroups
                                            ]);
        
    }
    
    public function showAssetIdentification($id)
    {
        $asset = Asset::find($id);
        $location = Location::all();
        $functionalGroup = AssetGroup::all();
        $zone = Zone::all();
        $class = AssetClass::all();
        $subclass = AssetSubclass::all();

        return view('assets.identification.show')
             ->with(['asset' => $asset,
                     'location' => $location,
                     'functionalGroup' => $functionalGroup,
                     'zone' => $zone,
                     'class' => $class,
                     'subclass' => $subclass
                    ]);
    }

    public function store(AssetRequest $request)
    {
        $assetObject = Asset::create([
            'asset_number' => request('asset-number'),
            'description' => request('asset-description'),
            'dimensions' => request('asset-dimensions'),
            'construction' => request('asset-construction'),
            'specific_identifiers' => request('identifier'),
            'class_id' => request('asset-subclass'),
            'zone_id' => request('asset-zone'),
            'location_id' => request('asset-location'),
            'functional_group_id' => request('asset-group'),
            'parent_id' => request('parent-asset')            
        ]);

         return redirect()->route('asset.list');
    }

    public function editAssetIdentification($id)
    {
        $asset = Asset::find($id);
        $selectedFunctionGroup = AssetGroup::find($asset->functional_group_id); 
        $selectedZone = Zone::find($asset->zone_id);
        $selectedAssetClass = AssetSubclass::find($asset->class_id);
        $selectedLocation = Location::find($asset->location_id);
        
        $parentAssets = Asset::all();
        $assetZones = Zone::all();
        $assetSubclasses = AssetSubclass::all();
        $assetLocations = Location::all();
        //$coordinates = Coordinates::all();
        $assetGroups = AssetGroup::all();
        if(!empty($asset->toArray())){
            return view('assets.edit')->with(['asset' => $asset,
                                              'parentAssets' => $parentAssets,
                                              'assetZones' => $assetZones,
                                              'assetSubclasses' => $assetSubclasses,
                                              'assetLocations' => $assetLocations,
                                              'assetGroups' => $assetGroups,
                                              'selectedFunctionGroup' => $selectedFunctionGroup,
                                              'selectedZone'=>$selectedZone,
                                              'selectedAssetClass'=>$selectedAssetClass,
                                              'selectedLocation' => $selectedLocation
                                            ]);
        }else{
            return redirect()->route('asset.list');
        }
    }

    public function updateAssetIdentification(EditAssetIdentificationRequest $request, $id)
    { 
       $asset = Asset::find($id);
        dd($asset);
        $asset->description = $request->input('description');
        $asset->dimensions = $request->input('dimensions');
        $asset->construction = $request->input('construction');
        $asset->specific_identifiers = $request->input('specific_identifiers');
        $asset->class_id = $request->input('subclass');
        $asset->zone_id = $request->input('zone');
        $asset->location_id = $request->input('location');
        $asset->functional_group_id = $request->input('group');       
        $asset->parent_id = $request->input('parent');
        $asset->save();

        return redirect()->route('asset.list');
    }

   public function updateAssetNumber(EditAssetNumberRequest $request, $id)
   {
       $asset = Asset::find($id);
       
       $asset->asset_number = $request->input('asset_number');
       $asset->save();

       return redirect()->route('asset.list');
   }

   public function destroy($id)
   {
       $deletedasset = Asset::find($id)->delete();
       return redirect()->route('asset.list'); 
   }
    
}

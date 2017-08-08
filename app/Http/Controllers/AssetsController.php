<?php

namespace App\Http\Controllers;
use App\Asset;
use App\Zone;
use App\AssetSubclass;
use App\Location;
use App\Coordinates;
use App\AssetGroup;
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

    public function editAssetIdentification($id){
        $asset = Asset::find($id);
        return view('assets.identification.edit')->with(['asset'=>$asset]);    
    }

    public function updateAssetIdentification(Request $request, Asset $asset){
        $asset->description = $request->input('description');
        $asset->save();
         return redirect()->route('asset.list');
    }
    
    public function editAssetLocation($id){
        $asset = Asset::find($id);
        $location = Location::find($asset->location_id);
        $assetLocations = Location::all();
        return view('assets.location.edit')->with(['asset'=>$asset,'assetLocations'=>$assetLocations,'location'=>$location]);
    }

    public function updateLocation(Request $request, Asset $asset){
        dd($asset);
    }
    public function showBrief()
    {

    }

    public function store(Request $request){
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

    public function edit($id)
    {
        $asset = Asset::find($id);
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
                                              //'coordinates' => $coordinates
                                            ]);
        }else{
            return redirect()->route('asset.list');
        }
    }


    public function update()
    {
         return redirect()->route('asset.list');
    }

    public function addCoordinates()
    {

    }
    
}

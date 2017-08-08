<?php

namespace App\Http\Controllers;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\locationRequest;

class LocationsController extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }

    //
    public function index(){
        $assetlocations = Location::latest()->paginate(8);
       return view('locations.list')->with('assetlocations',$assetlocations);
    }

    public function create(){
        return view('locations.create');
    }

    public function store(locationRequest $request){
        Location::create([
           'name' => request('name'),
           'description' => request('description'),
           'longitude' => request('logitude'),
           'latitude' => request('latitude') 
        ]);
    
    return redirect()->route('locations.list');
    }

    public function edit($id){
        $assetlocation = Location::find($id);
        if(!empty($assetlocation->toArray()))
        {
            return view('locations.edit')->with(['assetlocation'=>$assetlocation]);
        } 
        else{
            return redirect()->route('location.list');
        }
    }

    public function update(locationRequest $request, Location $assetlocation){
        $assetlocation->name = $request->input('name');
        $assetlocation->description = $request->input('description');
        $assetlocation->longitude = $request->input('longitude');
        $assetlocation->latitude = $request->input('latitude');
        $assetlocation ->save();
        return redirect()->route('location.list');
    }
    public function destroy($id){
        $deletedAssetLocation = Location::find($id) -> delete();
        return redirect()->route('location.list');
    }
}

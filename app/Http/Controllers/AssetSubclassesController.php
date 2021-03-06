<?php

namespace App\Http\Controllers;
use App\AssetClass;
use App\AssetSubclass;
use Illuminate\Http\Request;
use App\Http\Requests\assetSubclassesRequest;

class AssetSubclassesController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
       $assetSubclasses = AssetSubclass::latest()->paginate(15);
       return view('assets.identification.assetsubclasses.index')->with(['assetSubclasses'=>$assetSubclasses]);
    }

    public function create(){
        $assetClasses = AssetClass::all();
        return view('assets.identification.assetsubclasses.create')
        
                ->with(['assetClasses'=>$assetClasses]);
    }

    public function store(assetSubclassesRequest $request){
     
       AssetSubclass::create([
            'name' =>$request->input('name'),
            'description'=>$request->input('description'),
            'min_useful_life'=>$request->input('min_useful_life'),
            'max_useful_life'=>$request->input('max_useful_life'),
            'asset_class_id' =>$request->input('asset-class')
       ]);

      return redirect()->route('assetSubclass.list');       
    }

    public function edit($id){
        $assetSubclass = AssetSubclass::find($id);

        $selectedSubclass = AssetSubclass::find($assetSubclass->asset_class_id);

        $assetClasses = AssetClass::all();
        if(!empty($assetSubclass->toArray()))
        {
            return view('assets.identification.assetsubclasses.edit')
                    ->with(['assetSubclass'=>$assetSubclass, 
                            'assetclasses'=>$assetClasses,
                            'selectedSubclass'=>$selectedSubclass
                            ]);
        } 
        else{
            return redirect()->route('assetSubclass.list');
        }
    }

    public function update(assetSubclassesRequest $request,AssetSubclass $assetSubclass ){
        $assetSubclass ->name = $request->input('name');
        $assetSubclass->description = $request->input('description');
        $assetSubclass->min_useful_life = $request->input('min_useful_life');
        $assetSubclass->max_useful_life = $request -> input('max_useful_life');
        $assetSubclass->asset_class_id = $request ->input('asset-class');
        $assetSubclass->save();
        return redirect()->route('assetSubclass.list');   
    }

    public function destroy($id){
        $deletedAssetSubclass = AssetSubclass::find($id)->delete();
        return redirect()->route('assetSubclass.list');
    }
}

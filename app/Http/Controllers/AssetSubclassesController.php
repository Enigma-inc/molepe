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
       $assetsubclasses = AssetSubclass::latest()->paginate(8);
       return view('assets.assetsubclasses.index')->with('assetsubclasses',$assetsubclasses);
    }

    public function create(){
        $assetclasses = AssetClass::all();
        return view('assets.assetsubclasses.create')->with('assetclasses',$assetclasses);
    }
    
    public function show(){

    }

    public function store(assetSubclassesRequest $request){
     
       AssetSubclass::create([
            'name' =>$request->input('name'),
            'description'=>$request->input('description'),
            'min_useful_life'=>$request->input('min_useful_life'),
            'max_useful_life'=>$request->input('max_useful_life'),
            'asset_class_id' =>$request->input('asset-class')
       ]);

      return redirect()->route('assetsubclass.list');       
    }

    public function edit($id){
        $assetsubclass = AssetSubclass::find($id);
        $assetclasses = AssetClass::all();
        if(!empty($assetsubclass->toArray()))
        {
            return view('assets.assetsubclasses.edit')->with(['assetsubclass'=>$assetsubclass, 'assetclasses'=>$assetclasses]);
        } 
        else{
            return redirect()->route('assetsubclass.list');
        }
    }

    public function update(assetSubclassesRequest $request,AssetSubclass $assetsubclass ){
        $assetsubclass ->name = $request->input('name');
        $assetsubclass->description = $request->input('description');
        $assetsubclass->min_useful_life = $request->input('min_useful_life');
        $assetsubclass->max_useful_life = $request -> input('max_useful_life');
        $assetsubclass->asset_class_id = $request ->input('asset-class');
        $assetsubclass->save();
        return redirect()->route('assetsubclass.list');   
    }

    public function destroy($id){
        $deletedassetsubclass = AssetSubclass::find($id)->delete();
        return redirect()->route('assetsubclass.list');
    }
}

<?php

namespace App\Http\Controllers;

use App\AssetClass;
use Illuminate\Http\Request;
use App\Http\Requests\assetClassesRequest;


class AssetClassesController extends Controller
{
    //
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
       $assetClasses = AssetClass::latest()->paginate(15);
       return view('assets.identification.assetclasses.index')->with('assetClasses',$assetClasses);
    }

    public function store(assetClassesRequest $request){
         AssetClass::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
         ]);
         return redirect()->route('assetclass.list'); 
    }

    public function edit($id){
        $assetClass = AssetClass::find($id);
        if(!empty($assetClass->toArray()))
        {
            return view('assets.identification.assetclasses.edit')->with(['assetClass'=>$assetClass]);
        } 
        else{
            return redirect()->route('assetclass.list');
        }
    }
    public function update(assetClassesRequest $request, AssetClass $assetClass){
    //  dd($request->toArray());
        $assetClass->name = $request->input('name');
        $assetClass ->description = $request->input('description');
        $assetClass -> save();
        return redirect()->route('assetclass.list');
    }
    public function create(){
        return view('assets.identification.assetclasses.create');
    }

    public function destroy($id){
        $deletedAssetClass = AssetClass::find($id)
                                         ->delete();
         return redirect()->route('assetclass.list');
    }
}

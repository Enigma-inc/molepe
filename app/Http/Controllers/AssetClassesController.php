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
       $assetclasses = AssetClass::latest()->paginate(8);
       return view('assetclasses.index')->with('assetclasses',$assetclasses);
    }

    public function store(assetClassesRequest $request){
         AssetClass::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
         ]);
         return redirect()->route('assetclass.list'); 
    }

    public function edit($id){
        $assetclass = AssetClass::find($id);
        if(!empty($assetclass->toArray()))
        {
            return view('assetclasses.edit')->with(['assetclass'=>$assetclass]);
        } 
        else{
            return redirect()->route('assetclass.list');
        }
    }
    public function update(assetClassesRequest $request, AssetClass $assetclass){
    //  dd($request->toArray());
        $assetclass->name = $request->input('name');
        $assetclass ->description = $request->input('description');
        $assetclass -> save();
        return redirect()->route('assetclass.list');
    }
    public function create(){
        return view('assetclasses.create');
    }

    public function destroy($id){
        $deletedassetclass = AssetClass::find($id)
                                         ->delete();
         return redirect()->route('assetclass.list');
    }
}

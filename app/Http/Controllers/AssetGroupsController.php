<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetGroupRequest;
use App\AssetGroup;

class AssetGroupsController extends Controller
{
    //
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $assetGroups = AssetGroup::latest()->paginate(15);

        return view('assets.asset-groups.index')
               ->with(['assetGroups' => $assetGroups]);
    }

    public function create(){
        return view('assets.asset-groups.create');
    }

    public function store(AssetGroupRequest $request){
        AssetGroup::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect()->route('asset-group.list');
    }

    public function edit($id){
        $assetGroup = AssetGroup::find($id);

        return view('assets.asset-groups.edit')
             ->with(['assetGroup' => $assetGroup]);
    }

    public function update(AssetGroupRequest $request, AssetGroup $assetGroup){
        $assetGroup->description = $request->input('description');
        $assetGroup->name = $request->input('name');
        $assetGroup->save();

        return redirect()->route('asset-group.list');
    }

    public function delete($id){
        $deletedAssetGroup = AssetGroup::find($id)
                                       ->delete();
        return redirect()->route('asset-group.list');
    }
}

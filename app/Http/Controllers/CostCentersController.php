<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CostCenter;

class CostCentersController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $costCenters = CostCenter::latest()->paginate(10);

        return view('assets.accountability.cost-centers.index')
               ->with('costCenters', $costCenters);
    }

    public function store(Request $request){
        CostCenter::create([
            'name' => request('name')
        ]);

        return redirect()->route('cost-center.list');
    }

    public function update(Request $request, $id){
        $costCenter = CostCenter::find($id);

        $costCenter->name = $request->input('name');
        $costCenter->save();

        return redirect()->route('cost-center.list');
    }

    public function destroy($id)
   {
       $deletedCostCenter = CostCenter::find($id)->delete();
       return redirect()->route('cost-center.list'); 
   }
}

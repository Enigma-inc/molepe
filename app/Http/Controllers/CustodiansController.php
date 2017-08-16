<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custodian;

class CustodiansController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){        
        $custodians = Custodian::latest()->paginate(10);
        
        return view('assets.accountability.custodians.index')
               ->with('custodians', $custodians);
    }

    public function store(Request $request){
        Custodian::create([
            'name' => request('name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'phone' => request('phone')
        ]);

        return redirect()->route('custodian.list');
    }

    public function update(Request $request, $id){
        $custodian = Custodian::find($id);

        $custodian->name = $request->input('name');
        $custodian->last_name = $request->input('last_name');
        $custodian->email = $request->input('email');
        $custodian->phone = $request->input('phone');
        $custodian->save();

        return redirect()->route('custodian.list');

    }

    public function destroy($id)
    {
        $deletedCustodian = Custodian::find($id)->delete();
        
        return redirect()->route('custodian.list'); 
    }
}

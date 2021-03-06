<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custodian;
use App\Http\Requests\AccountabilityCustodiansRequest;

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

    public function store(AccountabilityCustodiansRequest $request){
        Custodian::create([
            'name' => request('name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'phone' => request('phone')
        ]);

        return redirect()->route('custodian.list');
    }

    public function edit($id){
        
        $custodian = Custodian::find($id);

        if(!empty($custodian->toArray())){
            return view('assets.accountability.custodians.edit')
                   ->with('custodian', $custodian);
        }else{
            return redirect()->route('custodian.list');
        }
    }

    public function update(AccountabilityCustodiansRequest $request, Custodian $custodian){
        $custodian->name = $request->input('name');
        $custodian->last_name = $request->input('last_name');
        $custodian->email = $request->input('email');
        $custodian->phone = $request->input('phone');
        $custodian->save();

        return redirect()->route('custodian.list');
    }

    public function destroy($id)
    {
        $deletedCustodian = Custodian::find($id)
                            ->delete();
        
        return redirect()->route('custodian.list'); 
    }
}

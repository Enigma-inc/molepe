<?php

namespace App\Http\Controllers;

use App\Http\Requests\ZoneRequest;
use App\Http\Requests\EditZoneRequest;
use App\Zone;

class ZonesController extends Controller
{
    //
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $zones = Zone::latest()->paginate(15);

        return view('assets.identification.zones.index')
               ->with(['zones' => $zones]);
    }

    public function create(){
        return view('assets.identification.zones.create');
    }

    public function store(ZoneRequest $request){
        Zone::create([
            'name' => request('zone-name'),
            'description' => request('zone-description')
        ]);

        return redirect()->route('zone.list');
    }

    public function edit($id){
        $zone = Zone::find($id);

        return view('assets.identification.zones.edit')
             ->with(['zone' => $zone]);
    }

    public function update(EditZoneRequest $request, Zone $zone){
        $zone->description = $request->input('description');
        $zone->name = $request->input('name');
        $zone->save();

        return redirect()->route('zone.list');
    }

    public function delete($id){
        $deletedZone = Zone::find($id)
                           ->delete();
        return redirect()->route('zone.list');
    }
}

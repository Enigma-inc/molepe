<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionsController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $sections = Section::latest()->paginate(10);

        return view('assets.accountability.sections.index')
               ->with('sections', $sections);
    }

    public function store(Request $request){
        section::create([
            'name' => request('name')
        ]);

        return redirect()->route('section.list');
    }

    public function update(Request $request, $id){
        $section = Section::find($id);

        $section->name = $request->input('name');
        $section->save();

        return redirect()->route('section.list');
    }

    public function destroy($id)
    {
        $deletedSection = Section::find($id)->delete();
        
        return redirect()->route('section.list'); 
    }
}

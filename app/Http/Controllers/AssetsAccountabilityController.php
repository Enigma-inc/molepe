<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssetAccountability;

class AssetsAccountabilityController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $assets = AssetAccountability::latest()->paginate(15);

        return view('assets.accountability.index')->with('assets', $assets);
    }

    public function create(){
        return view('assets.accountability.create');
    }
}

@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <div class="col-xs-4 button-flex pull-right">
                <a href="{{route('asset.accountability.edit',$asset->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit Asset Accountability</a>
            </div>
            <div class="panel panel-default bordered">
                <div class="panel-heading">Assigned to - <strong>{{$assetAccountability[0]->custodian_name}} {{$assetAccountability[0]->custodian_last_name}}</strong></div>
                    
                    <div class="panel-body"> 
                        <div class="col-md-12 profile margin-top-5">
                            <div class="details-container">
                                <div class="asset-label">Department</div>
                                <div class="asset-info">{{$assetAccountability[0]->department_name}}</div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Section</div>
                                <div class="asset-info">{{$assetAccountability[0]->section_name}}</div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Cost Center</div>
                                <div class="asset-info">{{$assetAccountability[0]->cost_center_name}}</div>
                            </div>
                            <hr>
                            
                            <div class="details-container">
                                <div class="asset-label">Assigned</div>
                                <div class="asset-info">{{$asset->created_at->format('d M Y')}}</div>
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>      
        </div>
</div>
@endsection
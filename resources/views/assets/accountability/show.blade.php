@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        @if(!empty($assetAccountability->toArray()))
            <div class="col-xs-4 pull-right">
                <a href="{{route('asset.accountability.edit',$assetAccountability->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit Asset Accountability</a>
            </div>
            <div class="panel panel-default bordered">
                <div class="panel-heading">Assigned to - <strong>{{$assetAccountability[0]->custodian_name}} {{$assetAccountability[0]->custodian_last_name}}</strong></div>
                    
                    <div class="panel-body"> 
                        <div class="col-md-12 profile margin-top-5">
                            <div class="details-container">
                                <div class="asset-label">Department</div>
                                <div class="asset-info content-flex">
                                    {{$assetAccountability[0]->department_name}}
                                    <form class="padding-right-10" action="{{route('cost-center.delete', $asset->asset_accountability_id)}}" method="POST">
                                        {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$asset->asset_accountability_id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Remove</button>
                                    </form>
                                </div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Section</div>
                                <div class="asset-info content-flex">
                                    {{$assetAccountability[0]->section_name}}
                                    <form action="" method="POST">
                                        {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Remove</button>
                                    </form>
                                </div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Cost Center</div>
                                <div class="asset-info content-flex">
                                    {{$assetAccountability[0]->cost_center_name}}
                                    <form class="padding-right-10" action="{{route('cost-center.remove', $asset->asset_accountability_id)}}" method="POST">
                                        {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$asset->asset_accountability_id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Remove</button>
                                    </form>
                                </div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-info text-justify">
                                    {{$assetAccountability[0]->restrictions}}
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
        @else
            <div class="panel panel-default bordered">
                    
                <div class="panel-body"> 
                    <div class="alert alert-info" role="alert">
                        There is no accountability assigned to this asset.
                        <div class="button-flex pull-right">
                            <a href="{{route('asset.assign.accoutability',$asset->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Assign Asset Accountability</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </div>      
    </div>
</div>
@endsection
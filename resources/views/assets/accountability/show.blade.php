@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        @if(isset($assetAccountability))
            <div class="col-xs-4 pull-right">
                <a href="{{route('asset.accountability.edit',$assetAccountability->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit Asset Accountability</a>
            </div>
            <div class="panel panel-primary bordered">
                <div class="panel-heading">Assigned to - <strong>{{$assetAccountability->custodian->name}} {{$assetAccountability->custodian->last_name}}</strong></div>
                    
                    <div class="panel-body"> 
                        <div class="col-md-12 profile margin-top-5">
                        @elseif(!empty($assetAccountability->department_id))
                            <div class="details-container">
                                <div class="asset-label">Department</div>
                                <div class="asset-info content-flex">
                                    {{$assetAccountability->department->name}}
                                    <form class="" action="{{route('department.remove', $asset->id)}}" method="POST">
                                        {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$asset->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Remove</button>
                                    </form>
                                </div>
                            </div>
                            <hr>

                        @elseif(isset($assetAccountability->section))
                            <div class="details-container">
                                <div class="asset-label">Section</div>
                                <div class="asset-info content-flex">
                                    {{$assetAccountability->section->name}}
                                    <form action="{{route('section.remove', $asset->id)}}" method="POST">
                                        {{csrf_field()}}
                                            <input type="text" name="file-name" class="" value="{{$asset->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Remove</button>
                                    </form>
                                </div>
                            </div>
                            <hr>

                        @elseif(isset($assetAccountability->costCenter))                        
                            <div class="details-container">
                                <div class="asset-label">Cost Center</div>
                                <div class="asset-info content-flex">
                                    {{$assetAccountability->costCenter->name}}
                                    <form class="padding-right-10" action="{{route('cost-center.remove', $asset->id)}}" method="POST">
                                        {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$asset->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Remove</button>
                                    </form>
                                </div>
                            </div>
                            <hr>

                        @elseif(isset($assetAccountability->restrictions))                        
                            <div class="details-container">
                                <div class="asset-info text-justify">
                                    {{$assetAccountability->restrictions}}
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
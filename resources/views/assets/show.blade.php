@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <div class="panel panel-default bordered">
                <div class="panel-heading">Asset Number - <strong>{{$asset->asset_number}}</strong></div>
                    
                    <div class="panel-body"> 
                        <div class="col-md-12 profile margin-top-5">
                            <div class="details-container">
                                <div class="asset-label">Description</div>
                                <div class="asset-info">{{$asset->description}}</div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Dimensions</div>
                                <div class="asset-info">{{$asset->dimensions}}</div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Construction</div>
                                <div class="asset-info">{{$asset->construction}}</div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Specific Identifiers</div>
                                <div class="asset-info">{{$asset->specific_identifiers}}</div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Class</div>
                                <div class="asset-info">{{$asset->assetClass->name}}</div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Location</div>
                                <div class="asset-info">{{$asset->location->name}}</div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Functional Group</div>
                                <div class="asset-info">{{$asset->functionalGroup->name}}</div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label">Captured</div>
                                <div class="asset-info">{{$asset->created_at->format('d M Y')}}</div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-xs-12 button-flex">
                                    <a href="{{route('asset.edit',$asset->id)}}" class="btn btn-info btn-xs margin-right-5"><i class="fa fa-trash-o"></i> Edit</a>
                                    <form action="{{route('asset.delete',['id'=>$asset->id])}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="text" name="file-name"class="" value="{{$asset->id}}" hidden>
                                        <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i> Remove</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
</div>
@endsection
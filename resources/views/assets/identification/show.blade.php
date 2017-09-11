@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <div class="col-xs-4 button-flex pull-right">
                <a href="{{route('asset.identification.edit',$asset->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit Asset Identification</a>
                <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i> Edit Asset Number</button>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content--> 
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Asset Number</h4>
                        </div>
                        <div class="modal-body">
                            {!! Form::model($asset,['method'=>'PATCH','route' => ['asset.number.update', $asset->id],'class'=>'form-horizontal']) !!}
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('asset_number') ? ' has-error' : '' }}">
                                    <div class="col-md-6">                            
                                    {!! Form::text('asset_number', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('asset_number'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('asset_number') }}</strong>
                                            </span> 
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer-molepe">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            {!! Form::close() !!}                                        
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary bordered">
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

                        </div>
                    </div>
                </div>
            </div>      
        </div>
</div>
@endsection
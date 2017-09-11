@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row col-md-8 col-md-offset-2">
        @if(isset($assetAccountability))
            
            <div class="panel panel-primary bordered">
                <div class="panel-heading">
                    Assigned to - <strong>{{$assetAccountability->custodian->name}} {{$assetAccountability->custodian->last_name}}</strong>
                    <div class="pull-right button-flex button-item">
                        <a href="{{route('asset.accountability.edit',$assetAccountability->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit Asset Accountability</a>
                        {{--  <form class="" action="{{route('custodian.remove', $asset->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="text" name="file-name"class="" value="{{$asset->id}}" hidden>
                            <button type="submit" class="btn btn-info btn-xs"><i class="fa fa-times"></i> Remove</button>
                        </form>  --}}
                    </div>
                </div>
                    
                    <div class="panel-body"> 
                        <div class="col-md-12 profile margin-top-5">
                            <div class="details-container">
                            
                                <div class="asset-label content-flex button-item">  
                                    <form class="" action="{{route('department.remove', $asset->id)}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="text" name="file-name"class="" value="{{$asset->id}}" hidden>
                                        <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                    </form>
                                    Department                   
                                                     
                                </div>
                                <div class="asset-info">
                                    {{$assetAccountability->department->name}}
                                </div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label content-flex section-button-item">
                                    <form action="{{route('section.remove', $asset->id)}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="text" name="file-name" class="" value="{{$asset->id}}" hidden>
                                        <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                    </form>
                                    Section
                                    
                                </div>
                                <div class="asset-info">
                                    {{$assetAccountability->section->name}}
                                </div>
                            </div>
                            <hr>

                            <div class="details-container">
                                <div class="asset-label content-flex button-item">
                                    <form class="" action="{{route('cost-center.remove', $asset->id)}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="text" name="file-name"class="" value="{{$asset->id}}" hidden>
                                        <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                    </form>
                                    Cost Center                                    
                                </div>
                                <div class="asset-info">
                                    {{$assetAccountability->costCenter->name}}
                                </div>
                            </div>
                            <hr>

                            <div class="details-container">
                            
                                <div class="asset-label content-flex button-item">  
                                    <form class="" action="{{route('custodian.remove', $asset->id)}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="text" name="file-name"class="" value="{{$asset->id}}" hidden>
                                        <button type="submit" class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                                    </form>
                                    Custodian                   
                                                     
                                </div>
                                <div class="asset-info">
                                    {{ $assetAccountability->custodian->name }} {{ $assetAccountability->custodian->last_name }}
                                </div>
                            </div>
                            <hr>

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
@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <a href="{{route('asset.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">Add Asset</a>
            <div class="panel panel-default">
                <div class="panel-heading">List Of Assets</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Asset Number</th>
                                <th>Asset Description</th>
                                <th>Asset CLass</th>
                                <th>Location</th>
                                <th>Zone</th>
                                <th>Functional Group</th>
                                <th>Captured</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($assets as $asset)
                            <tr>
                                <td>
                                    {{$asset->asset_number}}
                                </td>
                                <td>
                                    {{$asset->description}}
                                </td>
                                <td>
                                    {{$asset->assetClass->name}}
                                </td> 
                                <td>
                                    {{$asset->location->name}}
                                </td>
                                <td>
                                    {{$asset->zone->name}}
                                </td>
                                <td>
                                    {{$asset->functionalGroup->name}}
                                </td>
                                <td>
                                    {{$asset->created_at->format('d M Y')}}
                                </td>
                                <td>
                                    <div class="col-xs-12 button-flex">
                                        <div class="dropdown">
                                            <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                            <i class="fa fa-list text-primary"></i>
                                            
                                            <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{route('asset.identification',$asset->id)}}"><i class="fa fa-file-text text-primary"></i> Identification</a></li>
                                                    <li><a href="#"><i class="fa fa-long-arrow-down text-primary"></i> Acquisition</a></li>
                                                    <li><a href="{{route('asset.accountability', $asset->id)}}"><i class="fa fa-users text-primary"></i> Accountability</a></li>
                                                    <li><a href="#"><i class="fa fa-sliders text-primary"></i> Performance</a></li>
                                                    <li><a href="#"><i class="fa fa-money text-primary"></i> Accounting</a></li>
                                                    <li><a href="#"><i class="fa fa-trash-o text-primary"></i> Disposal</a></li>
                                                    <li><a href="#"><i class="fa fa-warning text-primary"></i> Management & Risk</a></li>                                                
                                                </ul>
                                        </div>
                                        <!--<form action="{{route('asset.delete',['id'=>$asset->id])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$asset->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i> Remove</button>
                                        </form>-->
                                    </div>    
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $assets->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
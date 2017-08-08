@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
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
                                <th>Update entries</th>
                                
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
                                     <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                            Edit Fields
                                        <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('asset.edit',$asset->id)}}"> Identification</a></li>
                                                <li><a href="#"> Acquisition</a></li>
                                                <li><a href="#"> Accountability</a></li>
                                                <li><a href="#"> Performance</a></li>
                                                <li><a href="#"> Accounting</a></li>
                                                <li><a href="#"> Disposal</a></li>
                                                <li><a href="#">Management & Risk</a></li>                                                
                                            </ul>
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
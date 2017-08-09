@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <a href="{{route('location.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">Add Location</a>
            <div class="panel panel-default">
                <div class="panel-heading">List Of Asset Locations</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Location Name</th>
                                <th>Location Description</th>                                
                                <th>Location(Longitude)</th> 
                                <th>Location(Latitude)</th>
                                <th>Actions</th>                               
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($assetlocations as $assetlocation)
                            <tr>
                                <td>
                                    {{$assetlocation->name}}
                                </td>
                                <td>
                                    {{$assetlocation->description}}
                                </td>
                                 <td>
                                    {{$assetlocation->longitude}}
                                </td>
                                 <td>
                                    {{$assetlocation->latitude}}
                                </td>
                                <td>
                                    <div class="col-xs-12 button-flex">
                                        <a href="{{route('location.edit',$assetlocation->id)}}" class="btn btn-info btn-xs margin-right-5"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="{{route('location.delete',['id'=>$assetlocation->id])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$assetlocation->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i> Remove</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $assetlocations->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

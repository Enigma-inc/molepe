@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <a href="{{route('zone.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">Add Zone</a>
            <div class="panel panel-default">
                <div class="panel-heading">List Of Zones</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Zone Name</th>
                                <th>Zone Description</th>                                
                                <th>Action</th>                                
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($zones as $zone)
                            <tr>
                                <td>
                                    {{$zone->name}}
                                </td>
                                <td>
                                    {{$zone->description}}
                                </td>
                                <td>
                                    <div class="col-xs-12 button-flex">
                                        <a href="{{route('zone.edit',$zone->id)}}" class="btn btn-info btn-xs margin-right-5"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="{{route('zone.delete',['id'=>$zone->id])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$zone->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i> Remove</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $zones->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
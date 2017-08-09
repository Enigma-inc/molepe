@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <a href="{{route('asset-group.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">Add Asset-Group</a>
            <div class="panel panel-default">
                <div class="panel-heading">List Of Asse Groups</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Asset-Group Name</th>
                                <th>Asset-Group Description</th>                                
                                <th>Action</th>                                
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($assetGroups as $assetGroup)
                            <tr>
                                <td>
                                    {{$assetGroup->name}}
                                </td>
                                <td>
                                    {{$assetGroup->description}}
                                </td>
                                <td>
                                    <div class="col-xs-12 button-flex">
                                        <a href="{{route('asset-group.edit',$assetGroup->id)}}" class="btn btn-info btn-xs margin-right-5"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="{{route('asset-group.delete',['id'=>$assetGroup->id])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$assetGroup->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i> Remove</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $assetGroups->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
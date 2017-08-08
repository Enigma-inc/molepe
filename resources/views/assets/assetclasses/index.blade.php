@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <a href="{{route('assetclass.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">Add Asset Class</a>
        </div>
            <div class="panel panel-default">
                <div class="panel-heading">List Of Asset Classes</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Class Name</th>
                                <th>Class Description</th>                                
                                <th>Actions</th>                               
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($assetclasses as $assetclass)
                            <tr>
                                <td>
                                    {{$assetclass->name}}
                                </td>
                                <td>
                                    {{$assetclass->description}}
                                </td>
                                <td>
                                    <div class="col-xs-12 button-flex">
                                        <a href="{{route('assetclass.edit',$assetclass->id)}}" class="btn btn-info btn-xs margin-right-5"><i class="fa fa-trash-o"></i>Edit</a>
                                        <form action="{{route('assetclass.delete',['id'=>$assetclass->id])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$assetclass->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i>Remove</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $assetclasses->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection






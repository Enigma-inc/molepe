@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <a href="{{route('assetClass.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">Add Asset Class</a>
            <div class="panel panel-default">
                <div class="panel-heading">List Of Asset Classes</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Class Name</th>
                                <th>Class Description</th>                                
                                <th>Action</th>                               
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($assetClasses as $assetClass)
                            <tr>
                                <td>
                                    {{$assetClass->name}}
                                </td>
                                <td>
                                    {{$assetClass->description}}
                                </td>
                                <td>
                                    <div class="col-xs-12 button-flex">
                                        <a href="{{route('assetClass.edit',$assetClass->id)}}" class="btn btn-info btn-xs margin-right-5"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="{{route('assetClass.delete',['id'=>$assetClass->id])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$assetClass->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i> Remove</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $assetClasses->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection






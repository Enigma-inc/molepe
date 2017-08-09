@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <a href="{{route('assetsubclass.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">Add Asset Subclass</a>
            <div class="panel panel-default">
                <div class="panel-heading">List Of Asset Subclasses</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Subclass Name</th>
                                <th>Subclass Description</th>                                
                                <th>Minimum Lseful Life</th> 
                                <th>Maximum Useful Life</th>
                                <th>Actions</th>                               
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($assetsubclasses as $assetsubclass)
                            <tr>
                                <td>
                                    {{$assetsubclass->name}}
                                </td>
                                <td>
                                    {{$assetsubclass->description}}
                                </td>
                                 <td>
                                    {{$assetsubclass->min_useful_life}}
                                </td>
                                 <td>
                                    {{$assetsubclass->max_useful_life}}
                                </td>
                                <td>
                                    <div class="col-xs-12 button-flex">
                                        <a href="{{route('assetsubclass.edit',$assetsubclass->id)}}" class="btn btn-info btn-xs margin-right-5"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="{{route('assetsubclass.delete',['id'=>$assetsubclass->id])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$assetsubclass->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i> Remove</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $assetsubclasses->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection



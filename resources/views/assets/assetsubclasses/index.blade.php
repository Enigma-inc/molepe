@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <a href="{{route('assetSubclass.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">Add Asset Subclass</a>
            <div class="panel panel-default">
                <div class="panel-heading">List Of Asset Subclasses</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Subclass Name</th>
                                <th>Subclass Description</th>                                
                                <th>Minimum Useful Life</th> 
                                <th>Maximum Useful Life</th>
                                <th>Actions</th>                               
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($assetSubclasses as $assetSubclass)
                            <tr>
                                <td>
                                    {{$assetSubclass->name}}
                                </td>
                                <td>
                                    {{$assetSubclass->description}}
                                </td>
                                 <td>
                                    {{$assetSubclass->min_useful_life}}
                                </td>
                                 <td>
                                    {{$assetSubclass->max_useful_life}}
                                </td>
                                <td>
                                    <div class="col-xs-12 button-flex">
                                        <a href="{{route('assetSubclass.edit',$assetSubclass->id)}}" class="btn btn-info btn-xs margin-right-5"><i class="fa fa-edit"></i> Edit</a>
                                        <form action="{{route('assetSubclass.delete',['id'=>$assetSubclass->id])}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="file-name"class="" value="{{$assetSubclass->id}}" hidden>
                                            <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i> Remove</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $assetSubclasses->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection



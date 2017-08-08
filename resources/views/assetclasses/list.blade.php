@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="co col-xs-12">
            <a href="{{route('assetclass.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">add AssetClass</a>
        </div>
            <div class="panel panel-default">
                <div class="panel-heading">AssetClasses</div>
            <div class="panel-body">
             <div class="row">
                @foreach($assetclasses as $assetclass)
                   
                    <div class="col-md-6 bordered">
                        <div class="card-inverse">
                        <div class="card-block">
                            <h3 class="card-title">{{$assetclass -> name}}</h3>
                            <p class="card-text">{{$assetclass -> description}}</p>
                            <a href="{{route('assetclass.edit',$assetclass->id)}}" class="btn btn-primary">Edit</a>

                            <form action="{{route('assetclass.delete',['id'=>$assetclass->id])}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" name="file-name"class="" value="{{$assetclass->id}}" hidden>
                                <button type="submit" class="btn btn-danger btn-xs margin-right-5"><i class="fa fa-trash-o"></i>Remove</button>
                            </form>
                        </div>
                        </div>
                    </div>
                   
                @endforeach
                 </div>
                </div>
            </div>
            </div>
      </div>      
    </div>
    <div class="row text-center">
        {{$assetclasses->links()}}
    </div>
</div>
@endsection
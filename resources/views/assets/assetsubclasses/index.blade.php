@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="co col-xs-12">
            <a href="{{route('assetsubclass.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">add Asset SubClass</a>
        </div>
            <div class="panel panel-default">
                <div class="panel-heading">Asset SubClasses</div>
            <div class="panel-body">
             <div class="row">
                @foreach($assetsubclasses as $assetsubclass)
                   
                    <div class="col-md-6 bordered">
                        <div class="card-inverse">
                        <div class="card-block">
                            <h3 class="card-title">{{$assetsubclass->name}}</h3>
                            <p class="card-text">{{$assetsubclass->description}}</p>
                            <p class="card-text">Minimum useful life: {{$assetsubclass->min_useful_life}}</p>
                            <p class="card-text">Maximum useful life: {{$assetsubclass->max_useful_life}}</p>                                                            
                            <a href="{{route('assetsubclass.edit',$assetsubclass->id)}}" class="btn btn-default">Edit</a>
                            <form action="{{route('assetsubclass.delete',['id'=>$assetsubclass->id])}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" name="file-name"class="" value="{{$assetsubclass->id}}" hidden>
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
        {{$assetsubclasses->links()}}
    </div>
</div>
@endsection
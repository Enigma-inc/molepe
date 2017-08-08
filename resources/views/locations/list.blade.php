@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="co col-xs-12">
            <a href="{{route('location.create')}}" class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right">add Asset Location</a>
        </div>
            <div class="panel panel-default">
                <div class="panel-heading">Asset Locations</div>
            <div class="panel-body">
             <div class="row">
                @foreach($assetlocations as $assetlocation)
                   
                    <div class="col-md-6 bordered">
                        <div class="card-inverse">
                        <div class="card-block">
                            <h3 class="card-title">{{$assetlocation -> name}}</h3>
                            <p class="card-text">{{$assetlocation -> description}}</p>
                            <p class="card-text">Longitude: {{$assetlocation -> longitude}}</p>
                            <p class="card-text">Latitude: {{$assetlocation -> latitude}}</p>                                                            
                            <a href="{{route('location.edit',$assetlocation->id)}}" class="btn btn-default">Edit</a>
                            <form action="{{route('location.delete',['id'=>$assetlocation->id])}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" name="file-name"class="" value="{{$assetlocation->id}}" hidden>
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
        {{$assetlocations->links()}}
    </div>
</div>
@endsection